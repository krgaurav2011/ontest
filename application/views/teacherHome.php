<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $name[0]->designation . " " . $name[0]->name; ?></title>
        <link rel="stylesheet" href="http://localhost/ontest/Static/css/bootstrap.min.css"/>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/googleJquery.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/jquery.validate.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/jquery-validate.bootstrap-tooltip.js"></script>

        <style type="text/css">
            #panel{
                position: absolute;
                background-color: whitesmoke;
                color: #000; 
                padding-top: 1%;
                padding-bottom: 1%;
                margin: 1.3%;
                padding-left: 0%;
                width: 80%;
                margin-left: 10%;
                border-radius: 1em;
                opacity: 0.7;
                text-align: justify;
            }
            #name{
                box-shadow: 3px 8px 5px #e4f689;
                padding-right:5px;
                padding-left:5px;
                border: solid #a0c002;
                background-color: #f4f95e;
                color: #444;
                margin-top: 2%;
                margin-left: 5%;
                margin-right: 5.1%;
                font-size: 2em;
                opacity: 0.7;
            }
            body{
                background: url("http://localhost/ontest/Static/images/quote1.jpg") fixed;
                background-size: 98%;
            }
            #main{
                text-align: left;
            }
            #login{
                text-align: right;
                background-color: #115599;
                color: white;
                padding-top: 25px;
                padding-bottom: 5px;
                padding-right: 10px; 
            }
            #menu{
                text-align: right;
                background-color: #c6c6e5;
                color: white;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-right: 10px;
                height: 25px;
            }
            #header h1{
                position: absolute;
                top:2.7%;
                left:5%;
                color: #1199ff;
                text-shadow: blue;
                font-stretch: extra-expanded;
                font-variant: small-caps;
                background-color: rgba(255, 255, 255, 0.7);
                padding-right:5px;
                padding-left:5px; 
                border: 2px solid;
                border-radius: 5px;
                box-shadow: 0px 10px 5px #888888;
            }
            #btn{
                float: right;
                width: 7em;
                text-decoration: none;
                color: white;
            }
        </style>

    </head>

    <body>
        <div id="header">
            <h1>e-Xamine</h1>
        </div>
        <div id="main">
            <div id="login">
                <form id="loginform" class="form-inline row" role="form" action="<?= base_url('index/logout'); ?>" method="post">

                    <!-- -->
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="submit" id="submi" value="Logout" class="btn-danger form-control">
                        </div>
                    </div>

                </form>
            </div>
            <div id ="menu">
                <div id="btn">
                    <a href="<?php echo base_url('updateInfo/existingTeacherInfo'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="Edit Profile" class="btn-info form-control">
                        </div>
                    </a>
                </div>
                <div id="btn">
                    <a href="<?php echo base_url('home/contactus'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="Contact Us" class="btn-info form-control">
                        </div>
                    </a>
                </div>
                <div id="btn">
                    <a href="<?php echo base_url('home/about'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="About Us" class="btn-info form-control">
                        </div>
                    </a>
                </div>
            </div>
            <div id="name">
                <?php echo "Welcome ! " . $name[0]->designation . " " . $name[0]->name; ?>
            </div>
            <div id="panel">
                <div id="btn">
                    <a href="<?php echo base_url('test/set_test'); ?>">
                        <input type="button" class="btn-primary" value="Set New Test">
                    </a>
                </div>               
                <br><br><br>
                <div>
                    <i style="color: blue; padding-left: 20px"> You have set the following test(s) </i> 
                </div>
                <br>
                <table class="table" style="color: #002166; padding-left: 20px">
                    <tr>
                        <th>TestID</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>No. Of Questions</th>
                        <th>Full marks</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    if ($list == NULL) {
                        echo '<tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>';
                    } else {
                        foreach ($list as $row) {
                            $id = $row->id;
                            $subject = $row->subject;
                            $description = $row->description;
                            $no_of_questions = $row->number_of_questions;
                            $full_marks = $row->full_marks;
                            echo'<tr>'
                            . '<td>' . $id . '</td>'
                            . '<td>' . $subject . '</td>'
                            . '<td>' . $description . '</td>'
                            . '<td>' . $no_of_questions . '</td>'
                            . '<td>' . $full_marks . '</td>'
                            . '<td><a href="' . base_url() . 'test/view/' . $id . '";>View Ques</a></td>'
                            . '</tr>';
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>