<?php

$viewpass = '8888'; // 密码必须大于3位。留空则任何人可以访问
$title = '张顶炜';
$subtitle = '应聘Web 工程师';
$content = 'MarkDown';

$data['local'] = 1;


if( strlen( $viewpass ) > 0 && trim($_REQUEST['vpass']) != $viewpass )
{
	$data['errno'] = '0';
	$data['show'] = 0;
	$data['title'] = '';
	$data['subtitle'] = '';
	$data['content'] = '';
}
else
{
	
	$data['errno'] = '0';
	$data['show'] = 1;
	$data['title'] = $title;
	$data['subtitle'] = $subtitle;
	$data['content'] = $content;

}

echo json_encode( $data );
