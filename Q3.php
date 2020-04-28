<?php

class classicPlayer
{
    function setPiece($piece)
    {

    }
    function setName($name)
    {

    }
    
    function play()
    {
        echo "play!";
    }
}

class advancePlayer
{
    function setPiece($piece)
    {

    }
    function setName($name)
    {

    }
    
    function play()
    {
        echo "play!";
    }
}



class GamePlayerManager
{
    public static function setPlayer($player)
    {
        $this->player = $player; 
    }
    public static function play()
    {
        if($this->player == "Classic")
        {
            $p = new classicPlayer();
            $p->setPiece($piece);
            $p->setName("p");
            $this->play = $p->play();
        }
        else if($this->player == "Advance")
        {
            $p = new advancePlayer();
            $p->setPiece($piece);
            $p->setName("p");
            $this->play = $p->play();
        }
    }
}
$GPM = new GamePlayerManager();
$GPM->setPlayer("Claasic");
$GPM->play();
