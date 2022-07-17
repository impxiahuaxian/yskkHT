<?php
namespace app\api\controller\v1;
class Danmu extends Base {
public function getIndex(){
$param = input();
$limit = $param['limit'];
$start = $param['start'];
$where['vod_id'] = $param['vod_id'];
if (empty($param['vod_id'])){
return $this->error('缺少参数视频ID');
}
$at_time = $param['at_time'];
$where['at_time'] = ['>=',$at_time];
$order = [
'at_time'=>'asc'
];
$res = model('Danmu')->listData($where,$order,1,$limit,$start);
if ($res['code'] == 1){
$data = [
'limit'=>$res['limit'],
'start'=>$res['start'],
'list'=>$res['list']
];
}else{
$data = [
'limit'=>$limit,
'start'=>$start,
'list'=>[]
];
}
return $this->success($data);
}
public function postIndex(){
$this->checkLogin();
$param = input();
$res = model('User')->checkLogin();
if($res['code']>1) {
return $this->error( '登录后才可以发送弹幕');
}
$cookie = 'danmu_timespan';
if(!empty(cookie($cookie))){
return $this->error( '请不要频繁操作');
}
$pattern = '/[^\x00-\x80]/';
if(!preg_match($pattern,$param['content'])){
return $this->error( '内容必须包含中文,请重新输入');
}
$param['user_id'] = intval(cookie('user_id'));
$ip = sprintf('%u',ip2long(request()->ip()));
if($ip>2147483647){
$ip=0;
}
$param['danmu_ip'] = $ip;
$res = model('Danmu')->saveData($param);
if ($res['code'] >1){
return $this->error($res['msg']);
}
$add_score=0;
$config = config('task.danmu');
if ($config['status'] == 1){
$reword = $config['reward'];
if ($reword['points'] >0){
$exsPlogsCount = 0;
if ($config['reward_num']){
$todayTime = strtotime(date('Y-m-d',time()));
$toTime = $todayTime +24 * 3600;
$where = [
'plog_time'=>function($query) use($todayTime,$toTime){
$query->where('plog_time','>=',$todayTime)->where('plog_time','<',$toTime);
},
'user_id'=>$param['user_id'],
'plog_type'=>13
];
$exsPlogsCount = model('Plog')->countData($where);
}
if (empty($config['reward_num']) ||$config['reward_num'] >$exsPlogsCount){
$user['user_id'] = $GLOBALS['user']['user_id'];
$res = model('User')->where($user)->setInc('user_points',$reword['points']);
$add_score =$reword['points'];
$plog = [];
$user = $GLOBALS['user'];
$plog['user_id'] = $GLOBALS['user']['user_id'];
input('user_id',$plog['user_id']);
$plog['plog_type'] = 13;
$plog['plog_points'] =  $reword['points'];
$plog['plog_remarks']= '用户'.$user['user_name'].'弹幕奖励'.$reword['points'].'分';
$res = model('Plog')->saveData($plog);
}
}
}
cookie($cookie,'t',15);
return $this->success(['score'=>$add_score,'count'=>$exsPlogsCount +1,'count_num'=>$config['reward_num']]);
}
public function postDianzan(){
}
}
?>