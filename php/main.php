<!-- page-content  -->
<style>.card {display:inline-block;}</style>
<?php 
    $totalsum = $mysql->query("SELECT SUM(`price_order`) FROM `client_orders`")->fetch_assoc()['SUM(`price_order`)'];
    $totalclients = $mysql->query("SELECT COUNT(`Name_client`) FROM `clients`")->fetch_assoc()['COUNT(`Name_client`)'];
    $totalempls = $mysql->query("SELECT COUNT(`ID_empl`) FROM `employees`")->fetch_assoc()['COUNT(`ID_empl`)'];
 ?>
<div class="container-fluid p-5">
    <div class="row">
        <div class="form-group col-md-12">
            <h1 class="display-4">Главная</h1>
            <p class="lead">Выберите действия в боковом меню</p>
        </div>
    </div>
    <div class="card text-white bg-info  mb-3 align-top" style="max-width: 18rem;">
        <!-- <div class="card-header">Статистика</div> -->
        <div class="card-body text-center">
            <h1 class="card-title">
                <?php print_r($totalclients) ?>
            </h1>
            <p class="card-text lead">клиентов</p>
        </div>
    </div>
    <div class="card text-white bg-info  mb-3 align-top" style="max-width: 18rem;">
        <!-- <div class="card-header">Статистика</div> -->
        <div class="card-body  text-center">
            <h1 class="card-title">
                <?php print_r($totalsum) ?> ₽</h1>
            <p class="card-text lead">получено сегодня</p>
        </div>
    </div>
    <div class="card text-white bg-info  mb-3 align-top" style="max-width: 18rem;">
        <!-- <div class="card-header">Статистика</div> -->
        <div class="card-body  text-center">
            <h1 class="card-title">
                <?php print_r($totalempls) ?>
            </h1>
            <p class="card-text lead">Сотрудника</p>
        </div>
    </div>
</div>
<hr>
<div class="lead ml-3" style="font-size:16px;">
    <p>Разработка: Потемка Даниил, Серебрякова Екатерина 38гр ФКТиПМ КубГУ. <a href="javascript:void(0)" data-toggle="modal" data-target="#ModalAbout">О приложении</a></p>
</div>
</div>
</main>
</div>
<div class="modal fade" id="ModalAbout" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">О приложении</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Веб-приложение разработали студенты 38 группы <strong>Потемка Даниил</strong> и <strong>Серебрякова Екатерина</strong> для автоматизации ремонтной мастерской электронного оборудования
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>