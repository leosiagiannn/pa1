<?php
    function get_title($_title){
        return('<title>' . $_title . '</title>');
    }

    function open_page($_title){
        echo('<!DOCTYPE html><html><head lang="en"><meta charset="UTF-8">' . get_title($_title));
    }
    
    function close_page(){
        echo('</body></html>');
    }   
?>