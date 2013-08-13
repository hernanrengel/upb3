// var gr=true;
var expand = true;
var expand_grad=true; //variable para expandir los testimonios
$(function() {
    var $menu               = $('#ei_menu > ul'),
        $menuItems          = $menu.children('li'),
        $menuItemsImgWrapper= $menuItems.children('a'),
        $menuItemsPreview   = $menuItemsImgWrapper.children('.ei_preview'),
        totalMenuItems      = $menuItems.length,
    
        ExpandingMenu   = (function(){
            /*
                @current
                set it to the index of the element you want to be opened by default,
                or -1 if you want the menu to be closed initially
             */
            var current             = -1,
            /*
                @anim
                if we want the default opened item to animate initialy set this to true
             */
            anim                = true,
            /*
                checks if the current value is valid -
                between 0 and the number of items
             */
            validCurrent        = function() {
                return (current >= 0 && current < totalMenuItems);
            },
            init                = function() {
                    /* show default item if current is set to a valid index */
                if(validCurrent())
                    configureMenu();

                initEventsHandler();
            },
            configureMenu       = function() {
                    /* get the item for the current */
                var $item   = $menuItems.eq(current);
                    /* if anim is true slide out the item */
                if(anim)
                    slideOutItem($item, true, 900, 'easeInQuint');
                else{
                        /* if not just show it */
                    $item.css({width : '500px'})
                    .find('.ei_image')
                    .css({left:'0px', opacity:1});

                        /* decrease the opacity of the others */
                        $menuItems.not($item)
                                  .children('.ei_preview')
                                  .css({opacity:0.2});
                }
            },
            initEventsHandler   = function() {
                    /*
                    when we click an item the following can happen:
                    1) The item is already opened - close it!
                    2) The item is closed - open it! (if another one is opened, close it!)
                    */
                $menuItemsImgWrapper.bind('click.ExpandingMenu', function(e) {
                    var $this   = $(this).parent(),
                    idx     = $this.index();

                    if(current === idx) {
                        slideOutItem($menuItems.eq(current), false, 1500, 'easeOutQuint', true);
                        current = -1;
                    }
                    else{
                        if(validCurrent() && current !== idx)
                                slideOutItem($menuItems.eq(current), false, 250, 'jswing');

                        current = idx;
                            slideOutItem($this, true, 250, 'jswing');
                    }
                    return false;
                });
            },
                /* if you want to trigger the action to open a specific item */
                openItem            = function(idx) {
                    $menuItemsImgWrapper.eq(idx).click();
                },
                /*
                opens or closes an item
                note that "mLeave" is just true when all the items close,
                in which case we want that all of them get opacity 1 again.
                "dir" tells us if we are opening or closing an item (true | false)
                */
            slideOutItem        = function($item, dir, speed, easing, mLeave) {
                var $ei_image   = $item.find('.ei_image'),

                itemParam   = (dir) ? {width : '540px'} : {width : '75px'},
                imageParam  = (dir) ? {left : '0px'} : {left : '75px'};

                    /*if opening, we animate the opacity of all the elements to 0.1. this is to give focus on the opened item.. */
                if(dir)
                /*alternative: $menuItemsPreview.not($menuItemsPreview.eq(current)).stop().animate({opacity:0.1}, 500);*/
                    $menuItemsPreview.stop().animate({opacity:0.1}, 1000);
                else if(mLeave)
                    $menuItemsPreview.stop().animate({opacity:1}, 1500);
                    /* the <li> expands or collapses */
                    $item.stop().animate(itemParam, speed, easing);
                    /* the image (color) slides in or out */
                    $ei_image.stop().animate(imageParam, speed, easing, function() {
                        /*if opening, we animate the opacity to 1,otherwise we reset it. */
                        if(dir)
                            $ei_image.animate({opacity:1}, 2000);
                        else
                            $ei_image.css('opacity', 0.2);
                });
            };

            return {
                init        : init,
                openItem    : openItem
            };
        })();
        
    /*
    call the init method of ExpandingMenu
    */
    ExpandingMenu.init();

    /*
    if later on you want to open / close a specific item you could do it like so:
    ExpandingMenu.openItem(3); // toggles item 3 (zero-based indexing)
    */

    $('#trigger_list').find('li > a').bind('click', function(e) {
        ExpandingMenu.openItem($(this).parent().index()-1);

        // if(gr){
        //     $('#calendar .title span').css('width','780'); gr=false;
        // }else{
        //     $('#calendar .title span').css('width','404'); gr=true;
        // }
        // return false;
    });

});

$(document).on('ready', function(){
    $('#calendar').mousemove(function(){
        $('#calendar #ei_menu ul li').click();
        // alert('hola saliste');
    });
    initSlider();

    $('#panel_control #desp').click(function(){
        $('header #faculty').css('border-bottom','4px solid #aaa');
        if(expand){
            $('header #faculty').animate({ 'height' : 200 },500);
            $('header #faculty .main').animate({ 'height' : '100%' },300);
            $('#panel_control #desp').removeClass('icon-arrow-down-3');
            $('#panel_control #desp').addClass('icon-arrow-up-3');
            expand = false;

        }else{
            $('header #faculty').animate({ 'height' : 0 },500);
            $('header #faculty .main').animate({ 'height' : '0%' },1000);
            setTimeout(function(){
                $('header #faculty').css('border-bottom','0px solid #aaa');
            },250);
            $('#panel_control #desp').removeClass('icon-arrow-up-3');
            $('#panel_control #desp').addClass('icon-arrow-down-3');
            expand=true;
        }

    });
	
	$("#hex8").mouseover(function(){
			$("#hex8").css({opacity: "1"});
			$("#hex9").css({opacity: "1"});
		});
	$("#hex8").mouseout(function(){
			$("#hex8").css({opacity: "0.8"});
			$("#hex9").css({opacity: "0.8"});
		});
		
		
	$("#hex7").mouseover(function(){
			$("#hex7").css({opacity: "1"});
			$("#hex10").css({opacity: "1"});
		});
	$("#hex7").mouseout(function(){
			$("#hex7").css({opacity: "0.8"});
			$("#hex10").css({opacity: "0.8"});
		});
		
		
	$("#hex6").mouseover(function(){
			$("#hex6").css({opacity: "1"});
			$("#hex11").css({opacity: "1"});
		});
	$("#hex6").mouseout(function(){
			$("#hex6").css({opacity: "0.8"});
			$("#hex11").css({opacity: "0.8"});
		});	
		
		
	$("#hex5").mouseover(function(){
			$("#hex5").css({opacity: "1"});
			$("#hex12").css({opacity: "1"});
		});
	$("#hex5").mouseout(function(){
			$("#hex5").css({opacity: "0.8"});
			$("#hex12").css({opacity: "0.8"});
		});			
		
		
		
	$("#hex9").mouseover(function(){
			$("#hex9").css({opacity: "1"});
			$("#hex8").css({opacity: "1"});
		});
	$("#hex9").mouseout(function(){
			$("#hex9").css({opacity: "0.8"});
			$("#hex8").css({opacity: "0.8"});
		});		
		
		
		
	$("#hex10").mouseover(function(){
			$("#hex10").css({opacity: "1"});
			$("#hex7").css({opacity: "1"});
		});
	$("#hex10").mouseout(function(){
			$("#hex10").css({opacity: "0.8"});
			$("#hex7").css({opacity: "0.8"});
		});		
		
		
		
	$("#hex11").mouseover(function(){
			$("#hex11").css({opacity: "1"});
			$("#hex6").css({opacity: "1"});
		});
	$("#hex11").mouseout(function(){
			$("#hex11").css({opacity: "0.8"});
			$("#hex6").css({opacity: "0.8"});
		});
			
	
	
	$("#hex12").mouseover(function(){
			$("#hex12").css({opacity: "1"});
			$("#hex5").css({opacity: "1"});
		});
	$("#hex12").mouseout(function(){
			$("#hex12").css({opacity: "0.8"});
			$("#hex5").css({opacity: "0.8"});
		});	
	
	
	$("#vice").mouseover(function(){
			$("#vice").css({height: "990px"});
		});
	$("#vice").mouseout(function(){
			$("#vice").css({height: "210px"});
		});
		
	$("#hex1").mouseover(function(){
			$("#hex1").css({opacity: "1"});
			$("#hex2").css({opacity: "1"});
		});
	$("#hex1").mouseout(function(){
			$("#hex1").css({opacity: "0.8"});
			$("#hex2").css({opacity: "0.8"});
		});	
	
	
	$("#hex3").mouseover(function(){
			$("#hex3").css({opacity: "1"});
			$("#hex4").css({opacity: "1"});
		});
	$("#hex3").mouseout(function(){
			$("#hex3").css({opacity: "0.8"});
			$("#hex4").css({opacity: "0.8"});
		});	
		
		
		
    $('#open_grad').click(function(){
        if(expand_grad){
              $('#ei_menu ul').css('display','block');
              $('#ei_menu ul').animate({ 'width' : '780px' },500);
              $('#open_grad i').removeClass('icon-arrow-down-3');
              $('#open_grad i').addClass('icon-arrow-up-3');
            
              $('#calendar .section').css('display','none');
              $('#calendar #genex').animate({ 'width' : '500px' },500);
              expand_grad=false;
        }else{
            $('#ei_menu ul').animate({ 'width' : '0px' },500);
            $('#calendar #genex').animate({ 'width' : '0px' },500);
            setTimeout(function(){
                $('#ei_menu ul').css('display','none');
                $('#calendar .section').css('display','block');
            },500);
            $('#open_grad i').removeClass('icon-arrow-up-3');
              $('#open_grad i').addClass('icon-arrow-down-3');

            expand_grad=true;
        }
    });

    $('#navigation ul li').click(function(){
        // alert('hola');
        startSequence();        
    });

});

function startSequence(){
    for(var i =1;i<=12;i++){
        $('#hex'+i).css('opacity', '0');        

    }
    setTimeout( function(){ $('#hex1').animate({ 'opacity':1 }, 300); }, 300);        
    setTimeout( function(){ $('#hex2').animate({ 'opacity':1 }, 300); }, 600); 
    setTimeout( function(){ $('#hex3').animate({ 'opacity':1 }, 300); }, 900); 
    setTimeout( function(){ $('#hex4').animate({ 'opacity':1 }, 300); }, 1200); 
    setTimeout( function(){ $('#hex5').animate({ 'opacity':1 }, 300); }, 1500); 
    setTimeout( function(){ $('#hex6').animate({ 'opacity':1 }, 300); }, 1800); 
    setTimeout( function(){ $('#hex7').animate({ 'opacity':1 }, 300); }, 2100); 
	setTimeout( function(){ $('#hex8').animate({ 'opacity':1 }, 300); }, 2400); 
	setTimeout( function(){ $('#hex9').animate({ 'opacity':1 }, 300); }, 2700); 
	setTimeout( function(){ $('#hex10').animate({ 'opacity':1 }, 300); }, 3000); 
	setTimeout( function(){ $('#hex11').animate({ 'opacity':1 }, 300); }, 3300); 
	setTimeout( function(){ $('#hex12').animate({ 'opacity':1 }, 300); }, 3600); 
}

function initSlider(){
    //Animacion
    options = {
        auto : true,
        period : 3000,
        duration : 2000,
        effect : 'fade',
        direction : 'left',
        markers : 'on',
        arrows : 'on',
        stop : 'on'
    }
    $('#slider').Carousel(options);
}
//ilumina hexagono
