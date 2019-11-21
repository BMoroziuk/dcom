<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V-Points</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-group.row {
            position: fixed;
            width: 110%;
            background: #292d32;
        }

        #imgContainer {
            background-color: #f0f0f0;
            background-size: 100%;
            background-repeat: no-repeat !important;
            background-position: center;
        }

        #slider {
            position: fixed;
            width: 110%;
            height: 10%;
            background: #85898c;
            bottom: 0;
        }

        img {
            height: 90% !important;
            min-width: 100px;
            cursor: pointer;
        }

        #draw {
            position: absolute;
            overflow: hidden;
        }

        ;
        .drawed {
            stroke: #ff00ee;
            fill: none;
        }

        .text {
            fill: #FF00EE;
        }

        body {
            overflow: hidden;
        }

        circle {
            stroke: none;
            fill: #b73939;
        }

        circle:hover {
            fill: #fff !important;
        }

        .active {
            fill: #fff !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<?php

?>
<body>
<div style="position: absolute;; z-index: 100">
    <div class="form-row">
        <button class="btn btn-primary" style="display: inline-block;  margin: 10px; width: 150px" onclick="location
.replace('?pic=new')">New
        </button>
        <button class="btn btn-primary" style="display: inline-block;  margin: 10px; width: 150px" onclick="location
.replace('?pic=done')">Done
        </button>
        <button class="btn btn-primary" style="display: inline-block;  margin: 10px; width: 150px" onclick="location
.replace('?pic=all')">All
        </button>
        <input type="text" id='search' class="form-control" style="display: inline-block;  margin: 10px; width:
        150px" value="<?= $_GET['img'] ?>">
        <button class="btn btn-primary" style="display: inline-block;  margin: 10px; width: 150px"
                onclick="location
.replace(`?pic=search&img=${$('#search').val()}`)">Search
        </button>
    </div>
</div>
<img id='json' src="json.png" style="
    width: 100px;
    position: absolute;
    max-height: 100px;
    right: 200px;
    z-index: 100;
    top: 5px;
    background: #fff;
    border-radius: 5px;
">
<img id='sav' src="savico.png" style="
    /* height: 100px; */
    position: absolute;
    max-height: 100px;
    right: 300px;
    z-index: 100;
    top: 5px;
    background: #fff;
    border-radius: 5px;
">
<div id='sacrum'>
    <div class="row" width="300px" style="
    z-index: 1;
    position: absolute;
    right: 120px;
    top: 5px;
">
        <div class="col-4" style="
    display: flex;
">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="l5" data-toggle="list" href="#list-home"
                   role="tab" aria-controls="home">L5</a>
                <a class="list-group-item list-group-item-action" id="l4" data-toggle="list" href="#list-profile"
                   role="tab" aria-controls="profile">L4</a>
                <a class="list-group-item list-group-item-action" id="l3t" data-toggle="list" href="#list-messages"
                   role="tab" aria-controls="messages">L3</a>

                <a class="list-group-item list-group-item-action" id="l2" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">L2</a>
                <a class="list-group-item list-group-item-action" id="l1" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">L1</a>
                <a class="list-group-item list-group-item-action" id="t12" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T12</a>
                <a class="list-group-item list-group-item-action" id="t11" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T11</a>
                <a class="list-group-item list-group-item-action" id="t10" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T10</a>
                <a class="list-group-item list-group-item-action" id="t9" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T9</a>
                <a class="list-group-item list-group-item-action" id="t8" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T8</a>
                <a class="list-group-item list-group-item-action" id="t7" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T7</a>
                <a class="list-group-item list-group-item-action" id="t6" data-toggle="list" href="#list-settings"
                   role="tab" aria-controls="settings">T6</a>
                <a class="list-group-item list-group-item-action" id="t5"
                   data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">T5</a>
            </div>
        </div>
    </div>

    <div class="row" width="300px" style="
    z-index: 1;
    position: absolute;
    right: -5px;
    top: 5px;
">
        <div class="col-4" style="
    display: flex;
">
            <div role="tablist" id="list-tab" class="list-group">

                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cl5">
                        <label class="custom-control-label" for="cl5">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cl4">
                        <label class="custom-control-label" for="cl4">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cl3">
                        <label class="custom-control-label" for="cl3">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cl2">
                        <label class="custom-control-label" for="cl2">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cl1">
                        <label class="custom-control-label" for="cl1">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct12">
                        <label class="custom-control-label" for="ct12">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct11">
                        <label class="custom-control-label" for="ct11">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct10">
                        <label class="custom-control-label" for="ct10">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct9">
                        <label class="custom-control-label" for="ct9">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct8">
                        <label class="custom-control-label" for="ct8">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct7">
                        <label class="custom-control-label" for="ct7">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct6">
                        <label class="custom-control-label" for="ct6">Difficult</label>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#list-profile" role="tab" aria-controls="profile" style="
    display: flex;
">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="ct5">
                        <label class="custom-control-label" for="ct5">Difficult</label>
                    </div>
                </a>


            </div>
        </div>
    </div>

</div>
<button id='vis' class="btn btn-primary" onclick="this.style.display = 'none'; document.getElementById('sacrum').style
.display
= 'block'"
        type="button" style="
    right: 10px;
    position: absolute;
    top: 10px;
    display: none;
">Sacrum is visible
</button>
<div id="loading" oncontextmenu="return false" style="
    background: #0000009c;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    z-index: 100;
    display: none;
    padding-top: 300px;
"><img src="loading.gif" style="
    width: 100px;
    height: 100px!important;
    /* margin: auto; */
    max-width: 50px!important;
    position: absolute;
    left: calc(50% - 50px);
    top: calc(50% - 50px);
"></div>
<div id="imgContainer" width="100%" height="100%">
    <svg id="draw" width="100%" height="100%"></svg>
</div>
<script>
    var identityArr = [
        'L5',
        'L4',
        'L3',
        'L2',
        'L1',
        'T12',
        'T11',
        'T10',
        'T9',
        'T8',
        'T7',
        'T6',
        'T5'
    ];
    var canLoad = 1;

    class Main {
        date_created = '';
        labels = [];

        constructor() {
            this.date_created = String(new Date);
        }

        addLabel = function (label) {
            this.labels[this.labels.length] = label;
        }
        removeLabel = function (label) {
            if (this.label.includes(label)) {
                this.label = this.label.filter(function (ele) {
                    return ele != label;
                });
            }
        }
    }


    class Label {
        file_name = '';
        skipped = true;
        vertebrae = [];

        constructor(filename) {
            this.file_name = filename;
        }

        addVertebra = function (Vertebra, identityArr) {
            this.skipped = false;
            if (this.vertebrae.length == 0) {
                if (Vertebra.identity != identityArr[0]) {
                    Vertebra.identity = '';
                }
            } else if (Vertebra.identity != identityArr[this.vertebrae.length]) {
                Vertebra.identity = '';
            }
            this.vertebrae[this.vertebrae.length] = Vertebra;
        }
        removeVertebra = function (Vertebra) {
            if (this.vertebrae.includes(Vertebra)) {
                this.vertebrae = this.vertebrae.filter(function (ele) {
                    return ele != Vertebra;
                });
                if (this.vertebrae.length == 0) {
                    this.skipped = true;
                }
            }
        }
    }

    class Vertebra {
        identity = '';
        landmarks = '';
        difficult = false;
        changeDiff = function (bool) {

            this.difficult = bool;

        }
        addLandmarks = function (landmarks) {
            this.landmarks = landmarks;
        }
        addIdentity = function (identity) {
            this.identity = identity;
        }
    }

    /* var exportData = new class {
         date_created;
         labels = [];

         setDate() {
             this.date_created = new Date();
         }

         addPic($link) {
             this.labels[this.labels.length] = class {
                 filename = $link.replace('images/', '');
                 skipped = true;
                 vertebrae = [];



                 check(label, x, y) {

                     this.vertebrae.forEach(val,num)
                     {
                         if (val.identity == label) {
                             this.skipped = false;
                             val.landmarks+=` ${x} ${y}`;
                             return true;
                         }
                     }
                   }
                 addPoint (label, x, y){

                 }
             }
         }

     }*/
    $('#sav').click(function () {
        document.getElementById('loading').style.display = 'block';
        var previous = null;

        let k = 0;
        $prlab = new Label($('#imgContainer').css('backgroundImage')
            .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
            .split(',')[0]);
        let image = new Image();


        image.src = $prlab.file_name;
        let bgwidths = 1;
        let zoom = 1;
        image.onload = function () {

            bgwidths = image.width;
            zoom = bgwidths / $("#imgContainer").css("background-size").replace("px", "");
            let $ver = $('circle').first().attr('cx') * zoom + ' ' + $('circle').first().attr('cy') * zoom;


            $prlab.file_name = $prlab.file_name.split('/')[$prlab.file_name.split('/').length - 1];
            let n = false;
            $('circle').each(function (index) {
                n = true;
                if (previous) {
                    if (previous.attr('alt') == $(this).attr('alt')) {
                        if ($ver != '') {
                            $ver += ' ';
                        }
                        $ver += ($(this).attr('cx') * zoom) + ' ' + ($(this).attr('cy') * zoom);
                    } else {
                        $prver = new Vertebra;
                        $prver.addIdentity(previous.attr('alt'));
                        $prver.addLandmarks($ver);
                        $prver.changeDiff(document.querySelectorAll("input[type=checkbox]")[k].checked);


                        $prlab.addVertebra($prver, identityArr);
                        k++;

                        $ver = '';
                        $ver += ($(this).attr('cx') * zoom) + ' ' + ($(this).attr('cy') * zoom);
                    }
                }
                previous = $(this);
            });
            $prver = new Vertebra;
            $prver.addIdentity($('circle').last().attr('alt'));
            $prver.addLandmarks($ver);

            $prver.changeDiff(document.querySelectorAll("input[type=checkbox]")[k].checked);

            if (n) {
                $prlab.addVertebra($prver, identityArr);
            }
            let $diff = JSON.stringify({
                'L5': Number(document.querySelectorAll("input[type=checkbox]")[0].checked),
                'L4': Number(document.querySelectorAll("input[type=checkbox]")[1].checked),
                'L3': Number(document.querySelectorAll("input[type=checkbox]")[2].checked),
                'L2': Number(document.querySelectorAll("input[type=checkbox]")[3].checked),
                'L1': Number(document.querySelectorAll("input[type=checkbox]")[4].checked),
                'T12': Number(document.querySelectorAll("input[type=checkbox]")[5].checked),
                'T11': Number(document.querySelectorAll("input[type=checkbox]")[6].checked),
                'T10': Number(document.querySelectorAll("input[type=checkbox]")[7].checked),
                'T9': Number(document.querySelectorAll("input[type=checkbox]")[8].checked),
                'T8': Number(document.querySelectorAll("input[type=checkbox]")[9].checked),
                'T7': Number(document.querySelectorAll("input[type=checkbox]")[10].checked),
                'T6': Number(document.querySelectorAll("input[type=checkbox]")[11].checked),
                'T5': Number(document.querySelectorAll("input[type=checkbox]")[12].checked)
            })

            $.ajax({
                url: "save.php",
                type: "POST",
                async: false,
                data: {
                    "pic": `${$prlab.file_name}`,
                    "json": `${JSON.stringify($prlab)}`,
                    "diff": `${$diff}`
                }
            }).then(function () {
                document.getElementById('loading').style.display = 'none';
            });
        };
    });

    var $pictureLinks = [
        <?php
        if ($_GET['pic'] == 'all') {
            $pics = scandir('images/');
            $pics = array_diff($pics, array('.', '..'));
            foreach ($pics as $i => $pic) {
                $pics[$i] = 'images/' . $pic;
            }
            $piclist = implode('","', $pics);
            echo '"' . $piclist . '"';
        }
        if ($_GET['pic'] == 'done') {
            $sql = "select pic from vpoints_pics";
            $dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
            $result = mysqli_query($dbConnnect, $sql);
            mysqli_close($dbConnnect);
            $rows = [];
            while ($row = mysqli_fetch_array($result)) {
                $rows[] = $row;
            }
            $piclist = [];
            foreach ($rows as $row) {
                $piclist[] = 'images/' . $row[0];
            }

            $piclist = implode('","', $piclist);
            echo '"' . $piclist . '"';
        }
        if ($_GET['pic'] == 'new') {
            $pics = scandir('images/');
            $pics = array_diff($pics, array('.', '..'));
            foreach ($pics as $i => $pic) {
                $pics[$i] = 'images/' . $pic;
            }

            $sql = "select pic from vpoints_pics";
            $dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
            $result = mysqli_query($dbConnnect, $sql);
            mysqli_close($dbConnnect);
            $rows = [];
            while ($row = mysqli_fetch_array($result)) {
                $rows[] = $row;
            }
            $piclist = [];
            foreach ($rows as $row) {
                $piclist[] = 'images/' . $row[0];
            }
            $piclist = array_diff($pics, $piclist);

            $piclist = implode('","', $piclist);
            echo '"' . $piclist . '"';
        }
        if ($_GET['pic'] == 'search') {
            $img = file_exists('images/' . $_GET['img']) ? $_GET['img'] : '';
            echo '"images/' . $img . '"';
        }
        ?>
    ];
    var $ppc = 0;
    $color = 'hsl(0, 50%, 50%)';
    var $points = [];
    $points[$ppc] = [];
    var widthPic = [];
    var $move = false;
    var $globIn = -1;
    var $object = 0;
    var cntrlIsPressed = false;
    var $coords = [];
    var $frameN = 0;
    var $picN = 0;
    var $preColors = [];
    $preColors[$ppc] = [];
    var $diff = [];
    //var bgwidths = [];
    var imageSrc = [];
    var image = [];
    var $iden = 'L5';
    /* $pictureLinks.forEach(function (v, i) {

         imageSrc[i] = $pictureLinks[i];


         image[i] = new Image();


         image[i].src = imageSrc[i];

         image[i].onload = function () {
             bgwidths[i] = image[i].width;
         };

         $diff[i] = [];
         boxes = document.querySelectorAll("input[type=checkbox]");
         for (let y = 0; y < boxes.length; y++) {
             $diff[i][boxes[y].id] = false;
         }
     });*/
    /* $('input[type="checkbox"]').change(function (e) {

         $diff[$ppc][e.target.id] = e.target.checked;
     });*/

    function hsl2rgb(h, s, l) {

        var r, g, b, m, c, x

        if (!isFinite(h)) h = 0
        if (!isFinite(s)) s = 0
        if (!isFinite(l)) l = 0

        h /= 60
        if (h < 0) h = 6 - (-h % 6)
        h %= 6

        s = Math.max(0, Math.min(1, s / 100))
        l = Math.max(0, Math.min(1, l / 100))

        c = (1 - Math.abs((2 * l) - 1)) * s
        x = c * (1 - Math.abs((h % 2) - 1))

        if (h < 1) {
            r = c
            g = x
            b = 0
        } else if (h < 2) {
            r = x
            g = c
            b = 0
        } else if (h < 3) {
            r = 0
            g = c
            b = x
        } else if (h < 4) {
            r = 0
            g = x
            b = c
        } else if (h < 5) {
            r = x
            g = 0
            b = c
        } else {
            r = c
            g = 0
            b = x
        }

        m = l - c / 2
        r = Math.round((r + m) * 255)
        g = Math.round((g + m) * 255)
        b = Math.round((b + m) * 255)

        return {r, g, b}

    }

    function download(data, filename, typ) {
        var file = new Blob([data], {type: typ});
        if (window.navigator.msSaveOrOpenBlob) // IE10+
            window.navigator.msSaveOrOpenBlob(file, filename);
        else { // Others
            var a = document.createElement("a"),
                url = URL.createObjectURL(file);
            a.href = url;
            a.download = filename + '.json';
            document.body.appendChild(a);
            a.click();
            setTimeout(function () {
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            }, 0);
        }
    }

    $('#json').click(function () {
        document.getElementById('loading').style.display = 'block';
        let json = ($.ajax({
            url: "get.php",
            type: "POST",
            async: false,
            success: function () {

                $('#draw').html();
            },
        }).responseText);
        if (json != '') {
            let result = new Main();

            JSON.parse(json).forEach(function (el) {
                result.addLabel(JSON.parse(el));


            });
            download(JSON.stringify(result), new Date(), 'json');
        }

        document.getElementById('loading').style.display = 'none';
    });

    /* $('img').click(function () {
         $('circle').removeClass('active');
         $str = `{
     "date_created": "${new Date()}",
      "labels": [`;
         $pictureLinks.forEach(function (name, i) {
             $da = 0;
             $str += `
             {
                 "file_name": "${name.split('/')[name.split.length - 1]}",
                 "skipped": `;
             if ($points[i]) {
                 if ($points[i][0]) {
                     $da = 1;
                     $str += `false`;
                 } else {
                     $str += `true`;
                 }
             } else {
                 $str += `true`;
             }
             $str += `,
                 "vertebrae": [ `;
             if ($da) {
                 pts = -1;
                 ne = 0;
                 for (let ts = 0; ts < 13; ts++) {
                     $whee = 360 / 13 * ts;
                     $cola = document.getElementsByTagName('circle');

                     for (let f = 0; f < $preColors[i].length; f++) {
                         if ($preColors[i][f] == `hsl(${$whee}, 50%, 50%)`) {
                             if (ts - pts > 1) {
                                 ne = 1;
                             } else {
                                 pts++;
                             }
                              switch (ik) {
                                  case (ik >= 0 && ik <= 6):
                                      $str += `L5`;
                                      break;
                                  default:
                              }
                          }
                             $str += `
                 {
                     "identity": "`;
                             $iid = 'cl5';
                             if (ts == 0) {
                                 if (!ne) {
                                     $str += `L5`;
                                 }
                                 $iid = 'cl5';
                             }
                             if (ts == 1) {
                                 if (!ne) {
                                     $str += `L4`;
                                 }
                                 $iid = 'cl4';
                             }
                             if (ts == 2) {
                                 if (!ne) {
                                     $str += `L3`;
                                 }
                                 $iid = 'cl3';
                             }
                             if (ts == 3) {
                                 if (!ne) {
                                     $str += `L2`;
                                 }
                                 $iid = 'cl2';
                             }
                             if (ts == 4) {
                                 if (!ne) {
                                     $str += `L1`;
                                 }
                                 $iid = 'cl1';
                             }
                             if (ts == 5) {
                                 if (!ne) {
                                     $str += `T12`;
                                 }
                                 $iid = 'ct12';
                             }
                             if (ts == 6) {
                                 if (!ne) {
                                     $str += `T11`;
                                 }
                                 $iid = 'ct11';
                             }
                             if (ts == 7) {
                                 if (!ne) {
                                     $str += `T10`;
                                 }
                                 $iid = 'ct10';
                             }
                             if (ts == 8) {
                                 if (!ne) {
                                     $str += `T9`;
                                 }
                                 $iid = 'ct9';
                             }
                             if (ts == 9) {
                                 if (!ne) {
                                     $str += `T8`;
                                 }
                                 $iid = 'ct8';
                             }
                             if (ts == 10) {
                                 if (!ne) {
                                     $str += `T7`;
                                 }
                                 $iid = 'ct7';
                             }
                             if (ts == 11) {
                                 if (!ne) {
                                     $str += `T6`;
                                 }
                                 $iid = 'ct6';
                             }
                             if (ts == 12) {
                                 if (!ne) {
                                     $str += `T5`;
                                 }
                                 $iid = 'ct5';
                             }

                             $zoom = bgwidths[i] / widthPic[i];



                             $str += `",
                    "landmarks": "${$points[i][f][0] * $zoom} ${$points[i][f][1] * $zoom} ${$points[i][f + 1][0] * $zoom} ${$points[i][f + 1][1] * $zoom} ${$points[i][f + 2][0] * $zoom} ${$points[i][f + 2][1] * $zoom} ${$points[i][f + 3][0] * $zoom} ${$points[i][f + 3][1] * $zoom} ${$points[i][f + 4][0] * $zoom} ${$points[i][f + 4][1] * $zoom} ${$points[i][f + 5][0] * $zoom} ${$points[i][f + 5][1] * $zoom}",
                     "difficult": ${$diff[i][$iid]}
                 },`;


                             f += 5;


                         }

                     }
                 }
                 $points[i].forEach(function (coord, ik) {
                     $str += `
                 {
                     "identity": "`;
                     $whee = 360 / 13 * ik;
                     $col = `hsl(${$whee}, 50%, 50%)`;
                     $cola = document.getElementsByTagName('circle');

                     if ($cola[ik].style.fill==`rgb(${hsl2rgb($whee,50,50).r}, ${hsl2rgb($whee,50,50).g}, ${hsl2rgb($whee,50,50).b})`) {

                         switch (ik) {
                             case (ik >= 0 && ik <= 6):
                                 $str += `L5`;
                                 break;
                             default:
                         }
                     }
 if (ik >= 0 && ik <= 6){
     $str += `L5`;
 }
                     }
                     $str += `",
                     "landmarks": "100 2000 200 2000 300 2000 300 3000 200 3000 100 3000",
                     "difficult": false
                 },`;
                 });
             }
             $str = $str.substring(0, $str.length - 1);
             $str += `]
             },`;
         });
         $str = $str.substring(0, $str.length - 1);
         $str += `
         ]
 }`;


         var dir = "https://signature.mindy-supports.com/dcom/get.php";
         var request = new XMLHttpRequest();


         var data = "str=" + $str.replace(' (Восточная Европа, летнее время)', '');
         request.open("POST", dir, true);
         request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


         request.onload = function () {

             if (request.status === 200) {

                 var link = document.createElement("a");
                 link.download = 'export.json';
                 link.href = this.responseText;
                 link.click();
             }
         }

         // sending data here
         request.send(data);


     });*/
    $('a').click(
        function () {
            $('a').removeClass('active');
            $(this).addClass('active');

            $wheel = 360 / 13 * $(this).index();
            $color = `hsl(${$wheel}, 50%, 50%)`;
            $iden = $(this).text();
        }
    );
    $(document).keydown(function (e) {

        if (e.which == 39 && canLoad == 1) {
            document.querySelectorAll("input[type=checkbox]").forEach(function (chb) {
                chb.checked = false;
            });
            if ($pictureLinks[$ppc + 1]) {
                canLoad = 0;
                document.getElementById('loading').style.display = 'block';
                $ppc += 1;


                if ($pictureLinks[$ppc]) {
                    $("#imgContainer").css("background", 'url("' + $pictureLinks[$ppc] + '")');
                }
                $("#imgContainer").css("background-size", `${$(window).width()}px`);
                $("#imgContainer").css("background-position", "");
                $("#imgContainer").css("background-position-x", `+=0px`);
                $("#imgContainer").css("background-position-y", `+=0px`);
                $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
                    1 / (1.4) + "px");
                $('#draw').width($("#imgContainer").css("background-size").replace("px", ""));
                $('#draw').css('left', $("#imgContainer").css("background-position-x").replace("px", ""));
                $('#draw').css('top', $("#imgContainer").css("background-position-y").replace("px", ""));


                var imageSrc = $('#imgContainer').css('backgroundImage')
                    .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                    .split(',')[0];
                var image = new Image();
                image.src = imageSrc;
                var bgwidth = image.width,
                    bgheight = image.height,
                    bgContainWidth = $("#imgContainer").css("background-size").replace("px", "");

                var bgContainHeight = (bgheight * bgContainWidth) / bgwidth;

                $('#draw').height(bgContainHeight);
                if (!$points[$ppc]) {
                    $preColors[$ppc] = [];
                    $points[$ppc] = [];
                }

                $('#draw').html('');
                $cs = $("#imgContainer").css("background-size").replace("px", "") / widthPic[$ppc];
                let $json = ($.ajax({
                    url: "getjson.php",
                    type: "POST",
                    async: false,
                    success: function () {

                        $('#draw').html();
                    },
                    data: {
                        "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                    }
                }).responseText);


                let bgwidths = 1;
                let zoom = 1;
                $('#draw').html();
                image.onload = function () {
                    if ($json != '') {
                        $json = JSON.parse($json);
                        $('#draw').html();
                        bgwidths = image.width;
                        zoom = bgwidths / $("#imgContainer").css("background-size").replace("px", "");

                        $json.vertebrae.forEach(function ($js) {
                            let $tc = $js.landmarks.split(' ');
                            for (i = 0; i < $tc.length; i += 2) {
                                $wh = $js.identity != '' ? identityArr.indexOf($js.identity) : '#fff';
                                let $cl = $wh != '#fff' ? `hsl(${$wh * 360 / 13}, 50%, 50%)` : '#fff';
                                $('#draw').append(`<circle cx=${$tc[i] / zoom} id='point${$points[$ppc].length + 1}' alt =
                        '${$js.identity}' cy=${$tc[i + 1] / zoom} r='3px'
                 style='fill:${$cl}'>`);
                                $points[$ppc][$points[$ppc].length] = [];
                                $points[$ppc][$points[$ppc].length - 1][0] = $tc[i] / zoom;
                                $points[$ppc][$points[$ppc].length - 1][1] = $tc[i + 1] / zoom;
                            }
                            // document.querySelectorAll("input[type=checkbox]")[identityArr.indexOf($js.identity)].checked
                            //     = $js.difficult;
                        })
                        /*$points[$ppc].forEach(function (coord, i) {

                            $('#draw').append(`<circle cx=${coord[0] * $cs} cy=${coord[1] * $cs} r='3px'
                            style='fill:${$preColors[$ppc][i]}'>`)
                            coord[0] *= $cs;
                            coord[1] *= $cs;
                        });*/
                        $('#draw').html($('#draw').html());
                        $("circle").on('mousedown', function (e) {

                            if (cntrlIsPressed && $(this).attr('class') == 'active') {

                                $(this).remove();
                                $preColors[$ppc].splice($globIn, 1);
                                $points[$ppc].splice($globIn, 1);


                            } else {
                                $object = $(this);
                                $('circle').removeClass('active');
                                $(this).addClass('active');
                            }
                            /* if ($move) {

                                 $(this).attr('r', '5');
                                     $(this).attr('cx', e.clientX);
                                     $(this).attr('cy', e.clientY);
                                     $points[$globIn][0] = e.clientX;
                                     $points[$globIn][1] = e.clientY;
                                 }*/

                        });
                        widthPic[$ppc] = $("#imgContainer").css("background-size").replace("px", "");
                        boxes = document.querySelectorAll("input[type=checkbox]");
                        /*for (let y = 0; y < boxes.length; y++) {
                            boxes[y].checked = $diff[$ppc][boxes[y].id];
                        }*/

                        let $diff = JSON.parse($.ajax({
                            url: "getdiff.php",
                            type: "POST",
                            async: false,
                            data: {
                                "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                            }
                        }).responseText);
                        $diff.forEach(function (el, k) {
                            document.querySelectorAll("input[type=checkbox]")[k].checked
                                = el;
                        });
                    } else {
                        document.getElementById('sacrum').style.display = 'none';
                        document.getElementById('vis').style.display = 'block';
                    }
                    canLoad = 1;
                    document.getElementById('loading').style.display = 'none';
                }
            }
        }
        if (e.which == 37 && canLoad == 1) {
            document.querySelectorAll("input[type=checkbox]").forEach(function (chb) {
                chb.checked = false;
            });
            if ($pictureLinks[$ppc - 1]) {
                canLoad = 0;
                document.getElementById('loading').style.display = 'block';
                $ppc -= 1;


                if ($pictureLinks[$ppc]) {
                    $("#imgContainer").css("background", 'url("' + $pictureLinks[$ppc] + '")');
                }
                $("#imgContainer").css("background-size", `${$(window).width()}px`);
                $("#imgContainer").css("background-position", "");
                $("#imgContainer").css("background-position-x", `+=0px`);
                $("#imgContainer").css("background-position-y", `+=0px`);
                $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
                    1 / (1.4) + "px");
                $('#draw').width($("#imgContainer").css("background-size").replace("px", ""));
                $('#draw').css('left', $("#imgContainer").css("background-position-x").replace("px", ""));
                $('#draw').css('top', $("#imgContainer").css("background-position-y").replace("px", ""));


                var imageSrc = $('#imgContainer').css('backgroundImage')
                    .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                    .split(',')[0];
                var image = new Image();
                image.src = imageSrc;
                var bgwidth = image.width,
                    bgheight = image.height,
                    bgContainWidth = $("#imgContainer").css("background-size").replace("px", "");

                var bgContainHeight = (bgheight * bgContainWidth) / bgwidth;

                $('#draw').height(bgContainHeight);
                if (!$points[$ppc]) {
                    $preColors[$ppc] = [];
                    $points[$ppc] = [];
                }

                $('#draw').html('');
                $cs = $("#imgContainer").css("background-size").replace("px", "") / widthPic[$ppc];


                let $json = ($.ajax({
                    url: "getjson.php",
                    type: "POST",
                    async: false,
                    success: function () {
                        $('#draw').html();
                    },
                    data: {
                        "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                    }
                }).responseText);


                let bgwidths = 1;
                let zoom = 1;
                $('#draw').html();
                image.onload = function () {
                    if ($json != '') {
                        $json = JSON.parse($json);
                        $('#draw').html();
                        bgwidths = image.width;
                        zoom = bgwidths / $("#imgContainer").css("background-size").replace("px", "");
                        $json.vertebrae.forEach(function ($js) {
                            let $tc = $js.landmarks.split(' ');
                            for (i = 0; i < $tc.length; i += 2) {
                                $wh = $js.identity != '' ? identityArr.indexOf($js.identity) : '#fff';
                                let $cl = $wh != '#fff' ? `hsl(${$wh * 360 / 13}, 50%, 50%)` : '#fff';
                                $('#draw').append(`<circle cx=${$tc[i] / zoom} id='point${$points[$ppc].length + 1}' alt =
                        '${$js.identity}' cy=${$tc[i + 1] / zoom} r='3px'
                 style='fill:${$cl}'>`);
                                $points[$ppc][$points[$ppc].length] = [];
                                $points[$ppc][$points[$ppc].length - 1][0] = $tc[i] / zoom;
                                $points[$ppc][$points[$ppc].length - 1][1] = $tc[i + 1] / zoom;
                            }
                            // document.querySelectorAll("input[type=checkbox]")[identityArr.indexOf($js.identity)].checked
                            //     = $js.difficult;
                        })

                        /*$points[$ppc].forEach(function (coord, i) {

                            $('#draw').append(`<circle cx=${coord[0] * $cs} cy=${coord[1] * $cs} r='3px' style='fill:${$preColors[$ppc][i]}'>`)
                            coord[0] *= $cs;
                            coord[1] *= $cs;
                        });*/
                        $('#draw').html($('#draw').html());
                        $("circle").on('mousedown', function (e) {

                            if (cntrlIsPressed && $(this).attr('class') == 'active') {

                                $(this).remove();
                                $preColors[$ppc].splice($globIn, 1);
                                $points[$ppc].splice($globIn, 1);


                            } else {
                                $object = $(this);
                                $('circle').removeClass('active');
                                $(this).addClass('active');
                            }
                            /* if ($move) {

                                 $(this).attr('r', '5');
                                     $(this).attr('cx', e.clientX);
                                     $(this).attr('cy', e.clientY);
                                     $points[$globIn][0] = e.clientX;
                                     $points[$globIn][1] = e.clientY;
                                 }*/

                        });
                        widthPic[$ppc] = $("#imgContainer").css("background-size").replace("px", "");
                        boxes = document.querySelectorAll("input[type=checkbox]");
                        /* for (let y = 0; y < boxes.length; y++) {
                             boxes[y].checked = $diff[$ppc][boxes[y].id];
                         }*/

                        let $diff = JSON.parse($.ajax({
                            url: "getdiff.php",
                            type: "POST",
                            async: false,
                            data: {
                                "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                            }
                        }).responseText);

                        $diff.forEach(function (el, k) {
                            document.querySelectorAll("input[type=checkbox]")[k].checked
                                = el;
                        });
                    }
                    canLoad = 1;
                    document.getElementById('loading').style.display = 'none';
                }
            }
        }
    })
    ;
    $("#draw").on("dblclick", function (e) {

        if (e.which == 1) {
            return false;
        }
    });
    $("#draw").on("mousedown", function (e) {

        if (e.which == 1) {

            if ($points[$ppc].length != 0) {

                $dobro = true;

                $points[$ppc].forEach(function ($cord, $in) {

                        if (Math.abs($cord[0] - e.offsetX) < 10 && Math.abs($cord[1] - e.offsetY) < 10) {
                            $dobro = false;
                            $globIn = $in;
                        }
                    }
                );


            } else {
                $dobro = true;
            }
            if (!e.ctrlKey) {
                if ($dobro) {
                    $('circle').removeClass('active');
                    $globIn = $points[$ppc].length;
                    $("#draw").append(`<circle id='point${$points[$ppc].length}' alt = '${$iden}' class='active' cx = ${e
                        .offsetX} cy
                     = ${e
                        .offsetY} r =
                        '3px' style='fill:${$color}'></circle>`);

                    $("#draw").html($("#draw").html());
                    $("circle").on('mousedown', function (e) {

                        if (cntrlIsPressed && $(this).attr('class') == 'active') {

                            $(this).remove();
                            $preColors[$ppc].splice($globIn, 1);
                            $points[$ppc].splice($globIn, 1);


                        } else {
                            $object = $(this);
                            $('circle').removeClass('active');
                            $(this).addClass('active');
                        }
                        /* if ($move) {

                             $(this).attr('r', '5');
                                 $(this).attr('cx', e.clientX);
                                 $(this).attr('cy', e.clientY);
                                 $points[$globIn][0] = e.clientX;
                                 $points[$globIn][1] = e.clientY;
                             }*/

                    });
                    $points[$ppc][$points[$ppc].length] = [];
                    $points[$ppc][$points[$ppc].length - 1][0] = e.offsetX;
                    $points[$ppc][$points[$ppc].length - 1][1] = e.offsetY;
                    $preColors[$ppc][$preColors[$ppc].length] = [];
                    $preColors[$ppc][$preColors[$ppc].length - 1] = $color;
                } else {
                    $move = true;
                }
            }
        }
    });
    $(document).keydown(function (event) {
        if (event.which == "17")
            cntrlIsPressed = true;
    });
    $(document).keyup(function (event) {
        cntrlIsPressed = false;
    });
    $('#draw').on('mousemove', function (e) {

        if (e.which == 1) {
            if ($object != 0) {

                $object.attr('r', '4');
                $object.attr('cx', e.offsetX);
                $object.attr('cy', e.offsetY);
                $points[$ppc][$globIn][0] = e.offsetX;
                $points[$ppc][$globIn][1] = e.offsetY;

            }
        }
    });
    $(document).on('mouseup', function (e) {
        if (e.which == 1) {
            $move = false;
            $("circle").attr('r', '3');
            $object = 0;
        }
    });
    $(document).mousedown(function (e) {
        if (e.which == 1) {
            down = true;
        }
    }).mouseup(function (e) {
        if (e.which == 1) {
            down = false;
        }
    });

    function redrawPoints(width) {

        $pointsInsides = document.getElementsByTagName('circle');
        $t = Number($pointsInsides.length);
        $('#draw').width($("#imgContainer").css("background-size").replace("px", ""));
        $('#draw').css('left', $("#imgContainer").css("background-position-x").replace("px", ""));
        $('#draw').css('top', $("#imgContainer").css("background-position-y").replace("px", ""));

        widthPic[$ppc] = $("#imgContainer").css("background-size").replace("px", "");
        var imageSrc = $('#imgContainer').css('backgroundImage')
            .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
            .split(',')[0];
        var image = new Image();
        image.src = imageSrc;
        var bgwidth = image.width,
            bgheight = image.height,
            bgContainWidth = $("#imgContainer").css("background-size").replace("px", "");

        var bgContainHeight = (bgheight * bgContainWidth) / bgwidth;

        $('#draw').height(bgContainHeight);
        $scale = $("#imgContainer").css("background-size").replace("px", "") / width;

        if ($pointsInsides[0] && $scale != 1) {

            $points[$ppc].forEach(function ($cord) {
                $cord[0] *= $scale;
                $cord[1] *= $scale;
            });
            $circles = document.getElementsByTagName('circle');

            /*   $circles.forEach(function (circle) {
                   circle.setAttribute('cx', (Number(circle.getAttribute('cx'))) * $scale);
                   circle.setAttribute('cy', (Number(circle.getAttribute('cy'))) * $scale);
               });*/

            for (let circle of $circles) {
                circle.setAttribute('cx', (Number(circle.getAttribute('cx'))) * $scale);
                circle.setAttribute('cy', (Number(circle.getAttribute('cy'))) * $scale);
            }
            /* for (let i = 0; i < $t; i++) {

                 $(`#point${i}`).attr('cx', (Number($(`#point${i}`).attr('cx'))) * $scale);
                 $(`#point${i}`).attr('cy', (Number($(`#point${i}`).attr('cy'))) * $scale);
                 // $x=$pointsInsides[i].getAttribute("cx")*$scale;


             }*/

        }
    }

    $("#imgContainer").height($(window).height());
    $("#imgContainer").on("contextmenu", function () {
        return false;
    });
    $("#nextPage").on("click", function () {


        $frameN += 1;

        if ($pictureLinks[$frameN - 8]) {
            $("#imgContainer").css("background", 'url("' + $pictureLinks[$frameN - 8] + '")');
        }
        $("#imgContainer").css("background-size", `${$(window).width()}px`);
        $("#imgContainer").css("background-position", "");
        $("#imgContainer").css("background-position-x", `+=0px`);
        $("#imgContainer").css("background-position-y", `+=0px`);
        $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
            1 / (1.4) + "px");
        $picN = $frameN - 8;
        //drawPolygon($picN);
    });
    $("#prewPage").on("click", function () {


        $frameN -= 1;

        if ($pictureLinks[$frameN - 8]) {
            $("#imgContainer").css("background", 'url("' + $pictureLinks[$frameN - 8] + '")');
        }
        $("#imgContainer").css("background-size", `${$(window).width()}px`);
        $("#imgContainer").css("background-position", "");
        $("#imgContainer").css("background-position-x", `+=0px`);
        $("#imgContainer").css("background-position-y", `+=0px`);
        $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
            1 / (1.4) + "px");
        $picN = $frameN - 8;
        //   drawPolygon($picN);
    });
    $(document).ready(function () {
        let $whs = 0;
        $('a').each(function (i) {
            if (i < 13) {
                $(this).attr('style', `background:hsl(${$whs * 360 / 13}, 50%, 50%)`);
                $whs++;
            }
        });
        canLoad = 0;
        document.getElementById('loading').style.display = 'block';
        $("#draw").html(" ");
        $("#imgContainer").css("background", 'url("load.gif")');

        $("#imgContainer").css("background-position", "");
        $frameN = 0;


        if ($pictureLinks[$ppc] && $pictureLinks[$ppc] != 'images/') {
            $frameN += 1;


            $("#imgContainer").css("background", 'url("' + $pictureLinks[$ppc] + '")');

            $("#imgContainer").css("background-size", `${$(window).width()}px`);
            $("#imgContainer").css("background-position", "");
            $("#imgContainer").css("background-position-x", `+=0px`);
            $("#imgContainer").css("background-position-y", `+=0px`);
            $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
                1 / (1.4) + "px");
            $picN = 0;
            var imageSrc = $('#imgContainer').css('backgroundImage')
                .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                .split(',')[0];
            var image = new Image();
            image.src = imageSrc;
            var bgwidth = image.width,
                bgheight = image.height,
                bgContainWidth = $("#imgContainer").css("background-size").replace("px", "");

            var bgContainHeight = (bgheight * bgContainWidth) / bgwidth;

            $('#draw').height(bgContainHeight);
            if (!$points[$ppc]) {
                $preColors[$ppc] = [];
                $points[$ppc] = [];
            }

            $('#draw').html('');
            $cs = $("#imgContainer").css("background-size").replace("px", "") / widthPic[$ppc];


            let $json = $.ajax({
                url: "getjson.php",
                type: "POST",
                async: false,
                success: function () {
                    $('#draw').html();
                },
                data: {
                    "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                }
            }).responseText;

            $('#draw').html('');
            $cs = $("#imgContainer").css("background-size").replace("px", "") / widthPic[$ppc];


            let bgwidths = 1;
            let zoom = 1;
            $('#draw').html();
            image.onload = function () {
                if ($json != '') {
                    $json = JSON.parse($json);
                    $('#draw').html();
                    bgwidths = image.width;
                    zoom = bgwidths / $("#imgContainer").css("background-size").replace("px", "");
                    $json.vertebrae.forEach(function ($js) {
                        let $tc = $js.landmarks.split(' ');
                        for (i = 0; i < $tc.length; i += 2) {
                            $wh = $js.identity != '' ? identityArr.indexOf($js.identity) : '#fff';
                            let $cl = $wh != '#fff' ? `hsl(${$wh * 360 / 13}, 50%, 50%)` : '#fff';
                            $('#draw').append(`<circle cx=${$tc[i] / zoom} id='point${$points[$ppc].length + 1}' alt =
                        '${$js.identity}' cy=${$tc[i + 1] / zoom} r='3px'
                 style='fill:${$cl}'>`);
                            $points[$ppc][$points[$ppc].length] = [];
                            $points[$ppc][$points[$ppc].length - 1][0] = $tc[i] / zoom;
                            $points[$ppc][$points[$ppc].length - 1][1] = $tc[i + 1] / zoom;

                        }
                        //document.querySelectorAll("input[type=checkbox]")[identityArr.indexOf($js.identity)].checked
                        //  = $js.difficult;
                    })

                    /*$points[$ppc].forEach(function (coord, i) {

                        $('#draw').append(`<circle cx=${coord[0] * $cs} cy=${coord[1] * $cs} r='3px' style='fill:${$preColors[$ppc][i]}'>`)
                        coord[0] *= $cs;
                        coord[1] *= $cs;
                    });*/
                    $('#draw').html($('#draw').html());
                    $("circle").on('mousedown', function (e) {

                        if (cntrlIsPressed && $(this).attr('class') == 'active') {

                            $(this).remove();
                            $preColors[$ppc].splice($globIn, 1);
                            $points[$ppc].splice($globIn, 1);


                        } else {
                            $object = $(this);
                            $('circle').removeClass('active');
                            $(this).addClass('active');
                        }
                        /* if ($move) {

                             $(this).attr('r', '5');
                                 $(this).attr('cx', e.clientX);
                                 $(this).attr('cy', e.clientY);
                                 $points[$globIn][0] = e.clientX;
                                 $points[$globIn][1] = e.clientY;
                             }*/

                    });
                    widthPic[$ppc] = $("#imgContainer").css("background-size").replace("px", "");
                    boxes = document.querySelectorAll("input[type=checkbox]");
                    /* for (let y = 0; y < boxes.length; y++) {
                         boxes[y].checked = $diff[$ppc][boxes[y].id];
                     }*/
                    let $diff = JSON.parse($.ajax({
                        url: "getdiff.php",
                        type: "POST",
                        async: false,
                        success: function () {
                            $('#draw').html();
                        },
                        data: {
                            "pic": `${imageSrc.split('/')[imageSrc.split('/').length - 1]}`
                        }
                    }).responseText);

                    $diff.forEach(function (el, k) {
                        document.querySelectorAll("input[type=checkbox]")[k].checked
                            = el;
                    });
                } else {
                    document.getElementById('sacrum').style.display = 'none';
                    document.getElementById('vis').style.display = 'block';
                }
                canLoad = 1;
                document.getElementById('loading').style.display = 'none';
            }

            widthPic[$ppc] = $("#imgContainer").css("background-size").replace("px", "");
            redrawPoints($("#imgContainer").css("background-size").replace("px", ""));


        } else {
            $("#imgContainer").css("background", 'url("fatal.png")');
            document.getElementById('sacrum').style.display = 'none';
            document.getElementById('vis').style.display = 'none';
            document.getElementById('loading').style.display = 'none';
            document.getElementById('sav').style.display = 'none';
            document.getElementById('json').style.display = 'none';
            $("#imgContainer").css("background-position", "");
        }


        // return $pictureLinks;


    });

    $("#imgContainer").on("wheel", function (e) {
        if (e.originalEvent.wheelDelta > 0) {
            $preWidth = $("#imgContainer").css("background-size").replace("px", "");

            $koefX = $("#imgContainer").css("background-size").replace("px", "") / (e.clientX - $("#imgContainer").css
            ("background-position-x").replace("px", ""));
            //find height
            $koefY = $("#imgContainer").css("background-size").replace("px", "") / (e.clientY - $("#imgContainer").css
            ("background-position-y").replace("px", ""));

            $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
                1 * (1.23) + "px");
            $deltaWidth = Math.abs($("#imgContainer").css("background-size").replace("px", "") - $preWidth) / $koefX;
            $("#imgContainer").css("background-position-x", `-=${$deltaWidth}px`);
            //yy
            $deltaHeight = Math.abs($("#imgContainer").css("background-size").replace("px", "") - $preWidth) / $koefY;
            $("#imgContainer").css("background-position-y", `-=${$deltaHeight}px`);
            //uxu
        } else {
            $preWidth = $("#imgContainer").css("background-size").replace("px", "");

            $koefX = $("#imgContainer").css("background-size").replace("px", "") / (e.clientX - $("#imgContainer").css
            ("background-position-x").replace("px", ""));
            //find height
            $koefY = $("#imgContainer").css("background-size").replace("px", "") / (e.clientY - $("#imgContainer").css
            ("background-position-y").replace("px", ""));


            $("#imgContainer").css("background-size", ($("#imgContainer").css("background-size").replace("px", "")) *
                1 / (1.23) + "px");
            $deltaWidth = Math.abs($("#imgContainer").css("background-size").replace("px", "") - $preWidth) / $koefX;
            $("#imgContainer").css("background-position-x", `+=${$deltaWidth}px`);
            //yy
            $deltaHeight = Math.abs($("#imgContainer").css("background-size").replace("px", "") - $preWidth) / $koefY;
            $("#imgContainer").css("background-position-y", `+=${$deltaHeight}px`);
        }
        redrawPoints($preWidth);
    });
    var $moveStartX;
    var $moveStartY;
    var $isDown;
    $("#imgContainer").on("mousedown", function (e) {
        $moveStartX = e.clientX;
        $moveStartY = e.clientY;
        $isDown = true;
    });
    $("#imgContainer").on("mouseup", function (e) {
        $isDown = false;
    });
    $("#imgContainer").on("mousemove", function (e) {
        if ($isDown && e.which == 3) {
            let $deltaX = e.clientX - $moveStartX;
            let $deltaY = e.clientY - $moveStartY;


            $("#imgContainer").css("background-position-x", `+=${$deltaX}px`);
            $("#imgContainer").css("background-position-y", `+=${$deltaY}px`);
            $moveStartX = e.clientX;
            $moveStartY = e.clientY;
            redrawPoints($("#imgContainer").css("background-size").replace("px", ""));
        }
    });

</script>
</body>
</html>