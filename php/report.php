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
    <h1 class="display-4">Создать отчет</h1>

<table id="table"
  data-pagination="true"
  data-pagination-h-align="left"
  data-pagination-detail-h-align="right"
  data-show-refresh="true"
  data-search="true"
   data-detail-view="true"
     data-row-attributes="rowAttributes"
   data-detail-formatter="detailFormatter"
  
  >
  <thead>
    <tr>
      <!-- <th data-field="ID_client" >Клиент</th> -->
      <th data-field="ID_order">Заказ</th>
      <th data-field="Name_client">Имя</th>
      <th data-field="phone_client">Телефон</th>
      <!-- <th data-field="sn_hw_order">С/Н</th> -->
      <th data-field="name_hw_order">Наименование</th>
      <th data-field="order_datetime">Дата заявки</th>
      <!-- <th data-field="order_end_datetime">Заявка выполнена</th> -->
      <!-- <th data-field="warranty_order">Гарантия</th> -->
      <th data-field="price_order">Стоимость</th>
      <!-- <th data-field="device_condition">Состояние девайса</th> -->
      <th data-formatter="operateFormatter"
          data-events="operateEvents">Отчет</th>
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
        'Дата завершения: ' + row.order_end_datetime,
        'Гарантия: ' + row.warranty_order
      ].join('')
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

  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })

    return html.join('')
  }

// управление заказами
  window.operateEvents = {
    'click .print': function (e, value, row) {
      // alert('Будет создан отчет: ' + JSON.stringify(row))
      window.location.replace('index.php?page=page');
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<div class="left">',
      // '<a href="https://github.com/wenzhixin/' + value + '" target="_blank">' + value + '</a>',
      '</div>',
      '<div class="text-center" style="font-size:22px;">',
      '<a class="print" href="javascript:void(0)" title="Like">',
      '<i class="fas fa-print"></i>',
      '</a>  ',
      '</div>'
    ].join('')
  }
</script>