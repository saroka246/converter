<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Конвертер валют | <?= $pageData['title']; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>
<body>
    <header class="wrapper">
        <div class="container">
            <div class="logo">
                <svg version="1.1" baseProfile="basic" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px"
                     viewBox="0 0 90 90" xml:space="preserve">
<circle fill="#FFC843" cx="45" cy="45" r="45"/>
                    <circle fill="#D38700" cx="45" cy="45" r="35"/>
                    <path fill="#FFC843" d="M49.731,41.74h-9.462c-0.959,0-1.769-0.81-1.769-1.769V32.63c0-0.959,0.81-1.769,1.769-1.769h9.462
	c0.959,0,1.769,0.81,1.769,1.769c0,1.657,1.343,3,3,3s3-1.343,3-3c0-4.284-3.485-7.769-7.769-7.769H48v-2.907c0-1.657-1.343-3-3-3
	c-1.657,0-3,1.343-3,3v2.907h-1.731c-4.284,0-7.769,3.485-7.769,7.769v7.341c0,4.277,3.475,7.757,7.75,7.768
	c0.007,0,0.013,0.002,0.019,0.002h9.462c0.959,0,1.769,0.81,1.769,1.769v7.341c0,0.959-0.81,1.77-1.769,1.77h-9.462
	c-0.959,0-1.769-0.811-1.769-1.77c0-1.657-1.343-3-3-3s-3,1.343-3,3c0,4.284,3.485,7.77,7.769,7.77H42v3.427c0,1.657,1.343,3,3,3
	c1.657,0,3-1.343,3-3v-3.427h1.731c4.283,0,7.769-3.485,7.769-7.77v-7.341C57.5,45.225,54.015,41.74,49.731,41.74z"/>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
</svg>
                <p>Конвертер<br>Валют</p>
            </div>
            <div class="profile">
                <p>Привет <span><?= $_SESSION['login'] ?></span></p>
                <a href="/converter/profile/logout" >Выйти
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="40px" height="40px" viewBox="0 0 533.333 533.333" style="enable-background:new 0 0 533.333 533.333;"
                         xml:space="preserve">
<g>
    <path d="M416.667,333.333v-66.666H250V200h166.667v-66.667l100,100L416.667,333.333z M383.333,300v133.333H216.667v100l-200-100V0
		h366.667v166.667H350V33.333H83.333L216.667,100v300H350V300H383.333z"/>
</g>

</svg>
                </a>
            </div>
        </div>
    </header>
    <main class="wrapper">
        <div class="container">
            <form class="converter">
                <div class="item">
                    <input type="number" min="1" value="1" name="cur">
                    <select>
                        <?php
                        $time = '';
                        $flag = false;
                        $usd = '';
                        foreach($pageData['currency'] as $select){
                            if(!$flag){
                                $time = $select['time'];
                                $flag = true;
                            }
                            ?>
                            <option data-value="<?= $select['value']?>" data-nom="<?= $select['nominal']?>" <?php if($select['char_name'] == 'USD'){ echo 'selected="selected"'; $usd = $select['value'];} ?>><?= $select['char_name']." ".$select['name']?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="arrow">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="50px" height="50px" viewBox="0 0 612.017 612.017" style="enable-background:new 0 0 612.017 612.017;"
                         xml:space="preserve">
<g>
    <g id="_x34_">
        <g>
            <path d="M606.521,291.429l-113.23-113.555c-7.495-7.515-19.656-7.515-27.15,0c-7.495,7.514-7.189,20.42-7.189,32.828v57.361
				H153.027v-57.361c0-12.408,0.306-25.314-7.189-32.828c-7.495-7.515-19.656-7.515-27.151,0L5.457,291.429
				c-3.996,4.015-5.698,9.331-5.43,14.57c-0.268,5.258,1.434,10.573,5.43,14.589l113.249,113.555c7.495,7.515,19.656,7.515,27.151,0
				c7.495-7.514,7.189-24.722,7.189-32.236v-57.361h305.924v57.361c0,12.408-0.307,24.722,7.188,32.236s19.656,7.515,27.151,0
				L606.56,320.587c3.996-4.015,5.697-9.331,5.43-14.589C612.218,300.759,610.518,295.443,606.521,291.429z"/>
        </g>
    </g>
</g>

</svg>
                </div>
                <div class="item">
                    <input type="number" min="1" value="<?= $usd; ?>" readonly name="rub">
                    <span>RUB Российский рубль</span>
                </div>
            </form>
            <h2>Курс валют на
                <?php
                echo $time;
                ?>
            </h2>
            <table>
                <tr>
                    <th>Буквенный код</th>
                    <th>Название</th>
                    <th>Номинал</th>
                    <th>Курс к рублю</th>
                </tr>
                <?php

                foreach($pageData['currency'] as $result){?>
                    <tr>
                        <td><?= $result['char_name'] ?></td>
                        <td><?= $result['name'] ?></td>
                        <td><?= $result['nominal'] ?></td>
                        <td><?= $result['value'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </main>
    <script src="/assets/js/converter.js"></script>
</body>
</html>
