<?php

class MockUser extends User
{
    public function delete($id)
    {
        return true;
    }
}