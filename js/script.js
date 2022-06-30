// открытие модальных окон
var callButton = document.querySelector(".header-call")
var callPopup = document.querySelector(".call-popup")
var popupClose = document.querySelector(".call-popup-close")
var callPopupBtn = document.querySelector(".call-popup-btn")

callButton.addEventListener("click", function(){
	callPopup.style.display = "block"
})

popupClose.addEventListener("click", function(){
	callPopup.style.display = "none"
})

var callButtonFooter = document.querySelector(".footer-call")
callButtonFooter.addEventListener("click", function(){
	callPopup.style.display = "block"
})

// Подключиться(на стр. internet)
var openBtn = document.querySelectorAll('.inet-open-popup-btn');
var popupWindow = document.querySelector('.inet-popup-window');
var popupCloseBtn = document.querySelector('.inet-popup-close');
openBtn.forEach(function(item){
	item.addEventListener("click", function(){
		popupWindow.style.display = "block"
	})
})
if(popupCloseBtn!=null){
	popupCloseBtn.addEventListener("click", function(){
		popupWindow.style.display = "none"
	})
}
//Подключиться (на index)
var indexOpenBtn = document.querySelector(".head-text-btn1");

if (indexOpenBtn!=null){
	indexOpenBtn.addEventListener("click",function (){
		popupWindow.style.display = "block"
	})
}

if(popupCloseBtn!=null){
	popupCloseBtn.addEventListener("click", function(){
		popupWindow.style.display = "none"
	})
}

// tv-channels select
var selectMenu = document.querySelector('#tv-select');
if (selectMenu!=null){
	selectMenu.addEventListener("change", function (){
		switch (selectMenu.value){
			case "1":
			document.querySelector('.broadcast-head').style.display = "block";
			document.querySelector('.extended-head').style.display = "block";
			document.querySelector('.clarity-head').style.display = "block";

			document.querySelector('.broadcast1').style.display = "flex";
			document.querySelector('.extended').style.display = "flex";
			document.querySelector('.clarity').style.display = "flex";
			break;
			case "2":
			document.querySelector('.broadcast-head').style.display = "block";
			document.querySelector('.extended-head').style.display = "none";
			document.querySelector('.clarity-head').style.display = "none";

			document.querySelector('.broadcast1').style.display = "flex";
			document.querySelector('.extended').style.display = "none";
			document.querySelector('.clarity').style.display = "none";
			break;
			case "3":
			document.querySelector('.broadcast-head').style.display = "none";
			document.querySelector('.extended-head').style.display = "block";
			document.querySelector('.clarity-head').style.display = "none";

			document.querySelector('.broadcast1').style.display = "none";
			document.querySelector('.extended').style.display = "flex";
			document.querySelector('.clarity').style.display = "none";
			break;
			case "4":
			document.querySelector('.broadcast-head').style.display = "none";
			document.querySelector('.extended-head').style.display = "none";
			document.querySelector('.clarity-head').style.display = "block";

			document.querySelector('.broadcast1').style.display = "none";
			document.querySelector('.extended').style.display = "none";
			document.querySelector('.clarity').style.display = "flex";
			break;

		}
	})
}

// tv-channels-search
var tvSearchInt = document.querySelector('#tv-search');
if (tvSearchInt!=null){
	tvSearchInt.oninput = function() {
		let val = this.value.trim().toLowerCase();
		let searchItems = document.querySelectorAll('.tv-card-wrap');
		if (val != ''){
			searchItems.forEach(function(elem) {
				if (document.querySelector('.broadcast1').innerText == ""){
	    			document.querySelector('.broadcast-head').style.display = "none";
	  			}else{
	  				document.querySelector('.broadcast-head').style.display = "block";
	  			}	
	  			if (document.querySelector('.extended').innerText == ""){
	    			document.querySelector('.extended-head').style.display = "none";
	  			}else{
	  				document.querySelector('.extended-head').style.display = "block";
	  			}	
	  			if (document.querySelector('.clarity').innerText == ""){
	    			document.querySelector('.clarity-head').style.display = "none";
	  			}else{
	  				document.querySelector('.clarity-head').style.display = "block";
	  			}	
	  			

				if (elem.innerText.toLowerCase().search(val) == -1){
					elem.style.display = "none"
				} else {				
					elem.style.display = "flex"
				}
			});
		} else {
			searchItems.forEach(function(elem) {
				elem.style.display = "flex"
				document.querySelector('.broadcast-head').style.display = "block";
				document.querySelector('.extended-head').style.display = "block";
				document.querySelector('.clarity-head').style.display = "block";
		})
	    }

};
}

