<?php
namespace Home\Model;
use Think\Model;
class BookModel extends Model
{
	public function getNewest($cid)
	{
		$map['cid'] = $cid;
		$res = $this -> where($map) -> field('id,l_title,l_thumbnail,create_time') -> order('create_time desc') -> find();
		return $res;
	}

	public function getAllLists($cid)
	{
		$map['cid'] = $cid;
		$res = $this -> where($map) -> field('id,l_title,create_time as time,l_banner,text') -> order('create_time desc') -> select();
		for ($i=0; $i < sizeof($res); $i++) { 
			//todo time filter
			$res[$i]['s_text'] = mb_substr($res[$i]['text'],0,20,'utf-8');
		}
		return $res;
	}

	public function getText($id)
	{
		$map['id'] = $id;
		$res = $this -> where($map) -> field('cid,l_title,text,l_banner,create_time as time') -> find();
		//todo time filter
		$res['author'] = D("Course") -> getAuthorByCid($res['cid']);
		return $res;
	}
}
?>