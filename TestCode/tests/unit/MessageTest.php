<?php

class MessageTest extends \PHPUnit\Framework\TestCase
{
    
    protected $user;

    public function SetMessageTest()
    {
        $this->user = new \App\Models\Message;

        
        $this->user->set_message("Testing");
        $this->user->display_message();
        
      
    }



}
?>