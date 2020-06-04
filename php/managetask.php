<link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/export/bootstrap-table-export.min.js"></script>

<style>
  .select,
  #locale {
    width: 100%;
  }
  .like {
    margin-right: 10px;
  }
</style>

<div class=" p-5">  
    <h1 class="display-4">Управление заказами</h1>

<table id="table"
  data-pagination="true"
  data-pagination-h-align="left"
  data-pagination-detail-h-align="right"
  data-show-refresh="true"
  data-show-toggle="true"
  data-search="true"
  data-detail-view="true"
  data-detail-view-icon="false"
  data-row-attributes="rowAttributes"
 
  data-show-columns="true"
  data-detail-view-by-click="true"
  data-detail-formatter="idorderfrm"
  >
  <thead>
    <tr>
      <!-- <th data-field="ID_client" >Клиент</th> -->
      <th data-sortable="true" data-field="ID_order" >Заказ</th>
      <th data-sortable="true" data-field="Name_client" >Имя</th>
      <th data-sortable="true" data-field="phone_client" >Телефон</th>
      <th data-sortable="true" data-field="sn_hw_order" >С/Н</th>
      <th data-sortable="true" data-field="name_hw_order" >Наименование</th>
      <th data-sortable="true" data-field="order_datetime" >Дата заявки</th>
      <th data-sortable="true" data-field="warranty_order" >Гарантия</th>
      <th data-sortable="true" data-field="price_order" >Стоимость</th>
      <th data-sortable="true" data-field="device_condition" >Состояние устройства</th>
      <th data-formatter="operateFormatter" data-events="operateEvents">Управление</th>
      <!-- <th data-field="order_end_datetime">Заявка выполнена</th> -->
    </tr>
  </thead>
</table>

<?php   
  
  $result = $mysql->query("SELECT * FROM `client_orders` JOIN `clients` USING (`ID_client`)");
  $dbdata = array();
  while ( $row = $result->fetch_assoc())  {
  $dbdata[]=$row;
  }
  ?>


<script>
  function rowAttributes(row, index) {
    return {
      'data-toggle': 'popover',
      'data-placement': 'bottom',
      'data-trigger': 'hover',
      'data-content': [
        // 'Индекс: ' + index,
        'Дата завершения: ' + row.order_end_datetime+ '\t\n',
        'Гарантия: ' + row.warranty_order
      ].join(' ')
    }
  }

  $(function() {
    $('#table').on('post-body.bs.table', function (e) {
      $('[data-toggle="popover"]').popover()
    })
  })

  var $table = $('#table')

  $(function() {
    var data = <?php echo json_encode($dbdata); ?>
  
    $table.bootstrapTable({
      data: data,
      escape: true,
      height: 750,
      locale: 'ru-RU'
    })
  })
  // управление заказами
  window.operateEvents = {
    'click .like': function (e, value, row) {
      alert('Принять заказ: ' + JSON.stringify(row))
    },
    'click .remove': function (e, value, row) {
      alert('Завершить заказ: ' + JSON.stringify(row))
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<div class="left">',
      // '<a href="https://github.com/wenzhixin/' + value + '" target="_blank">' + value + '</a>',
      '</div>',
      '<div class="text-center" style="font-size:15px;">',
      '<a class="like" href="javascript:void(0)" title="Like">',
      '<i class="fas fa-check-circle"></i>',
      '</a>  ',
      '<a class="remove text-center text-danger" href="javascript:void(0)" title="Remove">',
      '<i class="fas fa-times-circle"></i>',
      '</a>',
      '<a class="remove text-center ml-3" href="javascript:void(0)" title="Remove">',
      '<i class="fas fa-thumbtack"></i>',
      '</a>',
      '</div>'
    ].join('')
  }
</script>

<script>  
  function idorderfrm(index, row) {
    return '<p> <b>Элемент</b>: '+ index + '</p><p><b>Заказ</b>: ' + row.ID_order + '</p><p> <b>Имя</b>: ' + row.Name_client + '</p><p> <b>Номер телефона клиента</b>: ' + row.phone_client + '</p><p> <b>Серийный номер</b>: ' + row.sn_hw_order + '</p><p> <b>Наименование</b>: ' + row.name_hw_order + '</p><p> <b>Дата заказа</b>: ' + row.order_datetime + '</p><p> <b>Гарантия</b>: ' + row.warranty_order + '</p><p> <b>Стоимость</b>: ' + row.price_order + '</p><p> <b>Состояние</b>: ' + row.device_condition+'</p>' 
  }
</script>