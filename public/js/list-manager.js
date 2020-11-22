$(function(){

let SAVEDATAURL = '/list/saveAll';
let list1 = document.getElementById('list-1');
let list2 = document.getElementById('list-2');

let list1sort = Sortable.create(list1, { group: 'shared', animation: 200,
onChange: function (evt) {
  $('#list-message').html("");
},

});

let list2sort = Sortable.create(list2, { group: 'shared', animation: 200,
onChange: function (evt) {
  $('#list-message').html("");
},
});

function setMessage(message){
  $('#list-message').html(message);
}

saveListRequest = function (data) {
  setMessage("");

  $.ajaxSetup({
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          contentType: "application/json"
      }
  });
  $.ajax({
      url: SAVEDATAURL,
      type: 'POST',
      data: {
        items: JSON.stringify(data)
      },
      dataType: "json",
  }).done(function() {
    console.log('saved!');
    setMessage("Your list has been successfully saved.")
  }).fail(function (jqXHR, textStatus) {
    setMessage("An error occured during saving!")
  });
};


$('#button-save').on('click',() => {
  
  let listItems = [];

  let i = 0;
  list1sort.toArray().forEach(itemId => {
    let listitem = {id: itemId, listId: 1,indexNumber: i};
    listItems.push(listitem);

    i++;
  });

  i = 0;
  list2sort.toArray().forEach(itemId => {
    let listitem = {id: itemId, listId: 2,indexNumber: i};
    listItems.push(listitem);
  i++;
  });

  saveListRequest(listItems);

});


});
