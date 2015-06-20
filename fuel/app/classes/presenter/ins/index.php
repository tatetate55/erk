<?php
class presenter_User extends Presenter
{
    public function view()
    {
        $msgs = Model_Msg::find_all();
        $this->title = 'メッセージ';
        $this->msgs = $msgs;
    }
}

