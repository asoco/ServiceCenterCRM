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
    <h1 class="display-4">Ожидается доставка:</h1>

<table id="table"
  data-pagination="true"
  data-pagination-h-align="left"
  data-pagination-detail-h-align="right"
  data-show-refresh="true"
  data-search="true"
   data-detail-view="true"
     data-row-attributes="rowAttributes"
   data-detail-formatter="detailFormatter"
  data-show-columns-toggle-all="true"
  >
  <thead>
    <tr>
      <th data-field="ID_cat_part" >ID</th>
      <th data-field="Vendor_part" >Производитель</th>
      <th data-field="Name_part" >Наименование</th>
      <th data-field="Condition_part" >Ссостояние</th>
      <th data-field="Color_part" >Цвет</th>
      <th data-field="Price_part" >Цена</th>
      <th data-field="Quantity_part" >Сток</th>
      <th data-field="Status_delivery" >Доставка</th>
      <th data-field="Name_provider" >Поставщик</th>
            <th data-formatter="operateFormatter"
          data-events="operateEvents">Подтвердить</th>
    </tr>
  </thead>
</table> 
<?php   
  
  $result = $mysql->query("SELECT * FROM `catalog_parts` JOIN `providers` USING (`ID_provider`) WHERE `Status_delivery`='Ожидает доставки'");
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
</script>
<script>
  var $table = $('#table')

  $(function() {
    var data = <?php echo json_encode($dbdata); ?>
  
    $table.bootstrapTable({
      data: data,
      escape: true,
      height: 350,
      locale: 'ru-RU'
    })
  })
</script>
<script>
  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })

    return html.join('')
  }

</script>

<script>
  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })
  
    return html.join('')
  }
  
   function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })
  
    return html.join('')
  }
  
  // управление заказами
  window.operateEvents = {
    'click .like': function (e, value, row) {
      alert('You click like action, row: ' + JSON.stringify(row))
    },
    'click .remove': function (e, value, row) {
      alert('You click remove action, row: ' + JSON.stringify(row))
    }
  }
  
  function operateFormatter(value, row, index) {
    return [
      '<div class="left">',
      // '<a href="https://github.com/wenzhixin/' + value + '" target="_blank">' + value + '</a>',
      '</div>',
      '<div class="text-center" style="font-size:22px;">',
      '<a class="like" href="javascript:void(0)" title="Like">',
      '<i class="fas fa-check-circle"></i>',
      '</a>  ',
      '</div>'
    ].join('')
  }</script>