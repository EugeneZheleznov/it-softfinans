/***********************************************
* Mobile Menu
************************************************/

let unlock = true; // Нужна для отслеживания положения меню открыто/закрыто 
let iconMenu = document.querySelector(".icon__menu"); // иконка меню 
let Elbody = document.querySelector('body');

if (iconMenu != null) {
	let delay = 500; // пауза, чтобы не кликали слишком часто
	let menuBody = document.querySelector(".mobile__wrap");   
	 
	// При клике по иконке меню, мы добавляем классы CSS которые
	// делают наше меню видимым
	iconMenu.addEventListener("click", function (e) {
		if (unlock) { 
			iconMenu.classList.toggle("active");
			menuBody.classList.toggle("active"); 
			Elbody.classList.toggle("lock"); 
		}
	});

	// При клике по затемненной области overlay, закрываем меню
	// удаляя все добавленные классы CSS
	// overlay.addEventListener("click", function (e) {  
	// 		iconMenu.classList.remove("active");
	// 		menuBody.classList.remove("active"); 
	// 		Elbody.classList.remove("lock"); 
	// });

	// При клике по ссылкам меню, закрываем меню
	// удаляя все добавленные классы CSS
	/*
	menuBody.addEventListener("click", function (e) { 
		if (e.target.tagName === "A") {
			iconMenu.classList.remove("active");
			menuBody.classList.remove("active");
			overlay.classList.remove("active"); 
			Elbody.classList.remove("lock"); 
		}   
	}); */
}; 

/***********************************************
* Табы на главной странице
************************************************/

let label = document.querySelectorAll('label'),
	itemRadioBtn = document.querySelectorAll('.tabRadioBtn')
    itemDiv = document.querySelectorAll('.tab');

// По клику на 	label
label.forEach(function(checked) {
  checked.addEventListener("click", function(event) {

    itemDiv.forEach(function(item){
      item.classList.remove('active');
    });
  
    let targetDiv = document.querySelector(this.getAttribute('data-target')); 

    targetDiv.classList.add('active'); 
  });
});


/***********************************************
* Табы на странице товаров
************************************************/

let labelProduct = document.querySelectorAll('.item__btn.label'), 
	blockListTab = document.querySelectorAll('.block-list.tab');

// По клику на 	label
labelProduct.forEach(function(checked) {
  checked.addEventListener("click", function(event) {

    blockListTab.forEach(function(item){
      item.classList.remove('active');
    });
  
    let targetDiv = document.querySelector(this.getAttribute('data-target'));  
    targetDiv.classList.add('active'); 

    labelProduct.forEach(function(itemchecked){
		itemchecked.classList.remove('active');
	});
	checked.classList.add('active'); 
  });
});



// По клику на Radio-Button
itemRadioBtn.forEach(function(checked) {
	checked.addEventListener("click", function(event) {
  
	  itemDiv.forEach(function(item){
		item.classList.remove('active');
	  });
    
	  let targetDiv = document.querySelector(this.getAttribute('data-target')); 
  
	  targetDiv.classList.add('active'); 
	});
});



(function ($) {
	$(document).ready(function() {


		/***********************************************
		* Мобильное меню
		************************************************/

		$('li.menu-item-has-children').click(function(e) {
			
			if ($(this).hasClass('active')){
				$(this).removeClass('active');   
			} else {
				$(this).addClass('active'); 
			}
		}); 



		/***********************************************
		* Попап "Обратный звонок"
		************************************************/

		$('.popup__open').click(function(e) {
			
			if ($(this).hasClass('active')){
				$(this).removeClass('active');  
				$('.overlay').removeClass('active'); 
				$('.popup').removeClass('active'); 
				$('#title__modal').text(''); 
				$('#form__modal').val('');
				$('#url__modal').val('');
			} else {
				$(this).addClass('active');
				$('.overlay').addClass('active');
				$('.popup').addClass('active'); 
				$('#title__modal').text(setTitleModal); 
				$('#form__modal').val(setTitleMail);
				$('#url__modal').val(window.location.href);
			}
		}); 

  
		/***********************************************
		* Сброс попап по клику на кнопку закрыть 
		************************************************/

		$('.close__popup').click(function() { 
			$('.overlay').removeClass('active'); 
			$('.popup').removeClass('active'); 
			$('.popup__open').removeClass('active');  
			$('#title__modal').text(''); 
			$('#form__modal').val('');
			$('#url__modal').val('');
		})

		
	})

  

})(jQuery);


/***********************************************
* Для передачи заголовка карточек, услуг и пр. 
* в формы обратной связи
************************************************/
let setTitleMail = ''; 
let setTitleModal = '';

function getTitle(el) { 
	parentEl = el.closest('.data__Modal') 
	setTitleMail = parentEl.querySelector('.get__mailTitle').textContent; 
	setTitleModal = parentEl.querySelector('.get__title').textContent; 
};