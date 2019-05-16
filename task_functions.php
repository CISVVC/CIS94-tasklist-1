<?php

function display_csv_file($filename)
{
        $row = 1;
        if (($handle = fopen($filename, "r")) !== FALSE) {   // this line opens a file and returns a resource
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {  // the handle is the resource that was opened by fopen
                // There should be 4 fields
                print "Description: " . $data[0] . '<br>';
                print "Completed: " . $data[1] . '<br>';
                print "Date created: " . $data[2] . '<br>';
                print "Date completed: " . $data[3] . '<br>';
                print "---------------<br>";
                $row++;
            }
            fclose($handle);
        }
}


?>
