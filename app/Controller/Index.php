<?php
namespace app\Controller;

class Index
{
    public function say($name = 'world')
    {
        echo 'hello' , $name;
    }

    public function hello()
    {
    	echo 'one';    
	echo 'abc';
    }

}
