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

function mash_step() {

    room++;
    var objTo = document.getElementById('mash_step')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Step_time" name="Step_time[]" value="" placeholder="80 min"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Step_name" name="Step_name[]" value="" placeholder="Name"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Description" name="Description[]" value="" placeholder="Description"></div></div>' +
        '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <input type="text" class="form-control" id="Step_temp" name="Step_temp[]" value="" placeholder="72.0 C"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_mash_step('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest)
}
function remove_mash_step(rid) {
    $('.removeclass'+rid).remove();
}