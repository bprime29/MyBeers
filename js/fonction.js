/**
 * Created by bprime on 7/27/17.
 */

var room = 1;
function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Amount" name="Amount[]" value="" placeholder="Amount"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Item" name="Item[]" value="" placeholder="Item"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Type" name="Type[]" value="" placeholder="Type"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <input type="text" class="form-control" id="IBU" name="IBU[]" value="" placeholder="% / IBU"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
    $('.removeclass'+rid).remove();
}