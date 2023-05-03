var amtbuysell = 0;

window.onscroll = function() {sticky_navbar()};

let navbar = document.querySelector(".navtop");
let sticky = navbar.offsetTop;

function sticky_navbar() {
  if (window.pageYOffset >= 50) {
    navbar.classList.add("sticky")
    navbar.classList.add("fiexd_top")
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.remove("fiexd_top");
  }
};

// $('.digit-groupffie').find('input').each(function() {
// 	$(this).attr('maxlength', 1);
// 	$(this).on('keyup', function(e) {
// 		var parent = $($(this).parent());
		
// 		if(e.keyCode === 8 || e.keyCode === 37) {
// 			var prev = parent.find('input#' + $(this).data('previous'));
			
// 			if(prev.length) {
// 				$(prev).select();
// 			}
// 		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
// 			var next = parent.find('input#' + $(this).data('next'));
			
// 			if(next.length) {
// 				$(next).select();
// 			} else {
// 				if(parent.data('autosubmit')) {
// 					parent.submit();
// 				}
// 			}
// 		}
// 	});
// });

 function settingsSel(selected){
   var jsindex = 0;
   var selTabs = document.querySelectorAll('.setdivjs > div a > div');
    for (var tabs = 0; tabs < selTabs.length; tabs++) {
      if(selTabs[tabs] == selected) jsindex = tabs;
     selTabs[tabs].classList.remove('back');
    }
   selected.classList.add('back');

   var selDivs = document.querySelectorAll('.setdivjs > div > .p-0.m-0');
   for(var divs = 0; divs < selDivs.length; divs++) selDivs[divs].style.display = "none";
   selDivs[jsindex].style.display = "block";
 }

const y = document.querySelector('.toggleMenu');
const pushed = document.querySelectorAll('.pushed');
function toggleMenu(){
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    // let newdi = document.querySelector('.newdiv');
    navigation.classList.toggle('active');
    toggle.classList.toggle('active');
    main.classList.toggle('active');
    // newdi.classList.toggle('newdiver');
    // newdi.classList.toggle('newdiv2'); 

    var activetab = document.getElementById('activetab').classList.toggle('panel-active');
    var activeicon = document.getElementById('activeicon').classList.toggle('icon-active');
    

}


function buyBtn(){
  let leggha = document.querySelectorAll('.leggh .col-6 span a')[1];
  leggha.classList.add('Buy'); leggha.classList.remove('Buy2');
  let legghb = document.querySelectorAll('.leggh .col-6 span a')[0];
  legghb.classList.remove('Buy'); legghb.classList.add('Buy2');
  document.querySelector('.wotoporiously > :nth-child(1)').innerHTML = "BUY";

  var buysellall = document.querySelectorAll('.tradebuysell .m-0.p-0');
  for(var divs = 1; divs < buysellall.length; divs++) buysellall[divs].style.display = "none";
  buysellall[0].style.display = "block";
}
function sellBtn(){
  let leggha = document.querySelectorAll('.leggh .col-6 span a')[0];
  leggha.classList.add('Buy'); leggha.classList.remove('Buy2');
  let legghb = document.querySelectorAll('.leggh .col-6 span a')[1];
  legghb.classList.remove('Buy'); legghb.classList.add('Buy2');
  document.querySelector('.wotoporiously > :nth-child(1)').innerHTML = "SELL";

  var buysellall = document.querySelectorAll('.tradebuysell .m-0.p-0');
  for(var divs = 1; divs < buysellall.length; divs++) buysellall[divs].style.display = "none";
  buysellall[0].style.display = "block";
  //  .leggh .col-6 span a || .wotoporiously > :nth-child(2) 
}

function buysell0(){
  if(document.querySelector('.wotoporiously > :nth-child(1)').innerHTML == "BUY") {
    document.querySelectorAll('.tradebuysell .m-0.p-0')[0].style.display = 'none';
    document.querySelectorAll('.tradebuysell .m-0.p-0')[1].style.display = 'block';
  } else if(document.querySelector('.wotoporiously > :nth-child(1)').innerHTML == "SELL") {
    document.querySelectorAll('.tradebuysell .m-0.p-0')[0].style.display = 'none';
    document.querySelectorAll('.tradebuysell .m-0.p-0')[4].style.display = 'block';
  } 
}

function buysell1(){
  event.preventDefault();
  var buy2ccy = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2ccy');
  var buy2amt = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2amt');
  var buy2ttl = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2ttl');
  var buy2rte = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2rte');
  var buy2add = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2add');

  buy2add.innerHTML = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].getElementsByTagName('input').value;
  buy2amt.innerHTML = amtbuysell;
  buy2ttl =  buy2rte.innerHTML * amtbuysell;
  //other things
  //this.submit();

  document.querySelectorAll('.tradebuysell .m-0.p-0')[1].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[2].style.display = 'block';

  return false;
}

function buysell2(){
  event.preventDefault();
  var buy2ttl = document.querySelectorAll('.tradebuysell .m-0.p-0')[1].querySelectorAll('.divbuy2ttl');
  var buy3ttl = document.querySelectorAll('.tradebuysell .m-0.p-0')[2].querySelectorAll('.divbuy3ttl');

  buy3ttl.innerHTML = buy2ttl.innerHTML;
  //

  document.querySelectorAll('.tradebuysell .m-0.p-0')[2].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[3].style.display = 'block';

  return false;
}

function buysell3(){
  event.preventDefault();
  //
  document.querySelectorAll('.tradebuysell .m-0.p-0')[4].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[5].style.display = 'block';

  return false;
}

function buysell4(){
  event.preventDefault();
  //
  document.querySelectorAll('.tradebuysell .m-0.p-0')[4].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[6].style.display = 'block';

  return false;
}

function buysell5(){
  event.preventDefault();
  //send/manipulate form data with xmlhttprequest/ajax etc...

  document.querySelectorAll('.tradebuysell .m-0.p-0')[5].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[6].style.display = 'block';

  return false;
}

function buysell6(){
  document.querySelectorAll('.tradebuysell .m-0.p-0')[6].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[7].style.display = 'block';
}

function buysell7(){
  document.querySelectorAll('.tradebuysell .m-0.p-0')[7].style.display = 'none';
  document.querySelectorAll('.tradebuysell .m-0.p-0')[8].style.display = 'block';
}



function showStep2(){
  event.preventDefault();
 document.querySelectorAll('.showFormParent .p-0.m-0')[0].style.display = 'none';
 document.querySelectorAll('.showFormParent .p-0.m-0')[1].style.display = 'block';
 //do other stuff to the data
}
function showStep3(){
  event.preventDefault();
  document.querySelectorAll('.showFormParent .p-0.m-0')[1].style.display = 'none';
  document.querySelectorAll('.showFormParent .p-0.m-0')[2].style.display = 'block';
  //do other stuff to the data
}
function showStep4(){
  event.preventDefault();
  document.querySelectorAll('.showFormParent .p-0.m-0')[2].style.display = 'none';
  document.querySelectorAll('.showFormParent .p-0.m-0')[3].style.display = 'block';
  //do other stuff to the data
}
function showStep5(){
  event.preventDefault();
  document.querySelectorAll('.showFormParent .p-0.m-0')[3].style.display = 'none';
  document.querySelectorAll('.showFormParent .p-0.m-0')[4].style.display = 'block';
  //do other stuff to the data
}
function finalSubmit(){
  event.preventDefault();
  //do other stuff to the data
}

function putAmount(btn){
  if(btn.value == ""){
    document.querySelector('.wotoporiously > :nth-child(2)').innerHTML = "0";
  } else {
    document.querySelector('.wotoporiously > :nth-child(2)').innerHTML = btn.value;
    amtbuysell = btn.value;
  }
}

// y.addEventListener('click', toggleMenu, false);

