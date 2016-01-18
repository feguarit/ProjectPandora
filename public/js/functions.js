(function($) {

  var num_item = 0;

  RemoveTableRow = function(handler) {
    var tr = $(handler).closest('tr');

    tr.fadeOut(400, function(){ 
      tr.remove(); 
    }); 

    return false;
  };

  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";

    /*
    cols += '<td><input class="form-control" style="text-align:center" name="num_item[' . concat(num_item) . concat(']" type="text" value="') . concat(num_item + 1) . concat('"></td>');    
    cols += '<td><input class="form-control" name="part_number[' . concat(num_item) . concat(']" type="text"></td>');
    cols += '<td><input class="form-control" style="text-align:center" name="quantidade[' . concat(num_item) . concat(']" type="text"></td>');
    cols += '<td><input class="form-control" style="text-align:right" name="valor_unitario[' . concat(num_item) . concat(']" type="text"></td>');
    */
    cols += '<td><input class="form-control" style="text-align:center" name="itemNF['+num_item+'][num_item] " type="text" value="' + (num_item + 1) + '"></td>';    
    cols += '<td><input class="form-control" name="itemNF['+num_item+'][part_number]" type="text"></td>';
    cols += '<td><input class="form-control" style="text-align:center" name="itemNF['+num_item+'][quantidade]" type="text"></td>';
    cols += '<td><input class="form-control" style="text-align:right" name="itemNF['+num_item+'][valor_unitario]" type="text"></td>';
    cols += '<td align="center">';
    cols += '<button class="btn btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '</td>';

    num_item = num_item + 1;

    newRow.append(cols);
    $("#tabela-itens").append(newRow);

    return false;
  };
  
})(jQuery);