$(document).ready(function(){
	$('.phone-input').mask("+7 (999) 999-99-99");
});
	$("section a").fancybox({
  maxWidth  : 1200,
  maxHeight : 800,
  fitToView : true,
  width   : '80%',
  height    : '80%',
  autoSize  : false,
  closeClick  : false,
  openEffect  : 'elastic',
  closeEffect : 'none'
	});

// Массив всех объектов           
var data_obj = {
    'al':  ['<a href="/geo/remont-shpindelej-v-barnaule">Барнаул</a>'],
    'ar':  ['Северодвинск'],
    'bl':  ['Шебекино'],
    'bn':  ['Новозыбков'],
    'vm':  ['Владимир', 'Ковров'],
    'vl':  ['Волгоград'],
    'vo':  ['Череповец'],
    'vn':  ['Воронеж'],
    'ir':  ['Иркутск', 'Усть-Илимск'],
    'kj':  ['Калуга', 'Обнинск'],
    'kc':  ['Кемерово', 'Киселёвск'],
    'ki':  ['Киров'],
    'kt':  ['Кострома'],
    'ks':  ['Краснодар'],
    'kr':  ['Красноярск'],
    'le':  ['Кириши', 'Санкт-Петербург'],
    'lp':  ['Липецк'],
    'mc':  ['<a href="/geo/remont-shpindelej-v-balashihe">Балашиха</a>', '<a href="/geo/geo-remont-shpindelej-v-vidnom">Видное</a>', 'Волоколамск', 'Дедовск', 'Зеленоград', 'Истра', 'Луховицы', 'Мытищи', 'Одинцово', 'Подольск', 'Раменское', 'Сергиев Посад', 'Ступино', 'Фрязино',],
    'mu':  ['Мурманск'],
    'nn':  ['<a href="/geo/remont-shpindelej-v-arzamase">Арзамас</a>', 'Дзержинск', 'Нижний Новгород'],
    'nv':  ['<a href="/geo/remont-shpindelej-v-berdske">Бердск</a>', 'Новосибирск'],
    'om':  ['Омск'],
    'pz':  ['Пенза'],
    'pe':  ['<a href="/geo/remont-shpindelej-v-bereznikah">Березники</a>', 'Пермь'],
    'pr':  ['<a href="/geo/remont-shpindelej-v-arsen-eve">Арсеньев</a>', 'Владивосток', 'Уссурийск'],
    'bs':  ['Туймазы', 'Уфа'],
    'kl':  ['Костомукша', 'Петрозаводск', 'Сортавала'],
    'ko':  ['Сыктывкар'],
    'cr':  ['Евпатория'],
    'ml':  ['Йошкар-Ола'],
    'mr':  ['Саранск'],
    'ta':  ['Казань', 'Набережные Челны'],
    'cu':  ['Чебоксары'],
    'ro':  ['<a href="/geo/remont-shpindelej-v-azove">Азов</a>', 'Новочеркасск', 'Ростов-на-Дону', 'Таганрог'],
    'rz':  ['Рязань'],
    'ss':  ['Самара', 'Тольятти'],
    'sr':  ['<a href="/geo/remont-shpindelej-v-balakovo">Балаково</a>', 'Саратов', 'Энгельс'],
    'sv':  ['<a href="/geo/remont-shpindelej-v-verhnej-salde">Верхняя Салда</a>', 'Екатеринбург', 'Каменск-Уральский', 'Нижний Тагил'],
    'st':  ['<a href="/geo/remont-shpindelej-v-budennovske">Буденновск</a>', 'Георгиевск', 'Ставрополь'],
    'tr':  ['Кимры', 'Ржев', 'Тверь'],
    'tl':  ['Тула'],
    'tu':  ['Тюмень'],
    'ud':  ['Ижевск'],
    'ul':  ['Ульяновск'],
    'ht':  ['Сургут'],
    'cl':  ['Златоуст', 'Снежинск', 'Челябинск'],
    'ya':  ['Ноябрьск'],
    'yr':  ['Ярославль']
};  
colorRegion  = '#55cfc0'; // Цвет всех регионов
focusRegion  = '#0eb5a0'; // Цвет подсветки регионов при наведении на объекты из списка
selectRegion  = '#0eb5a0'; // Цвет изначально подсвеченных регионов 
highlighted_states  = {};  
//  Массив подсвечиваемых регионов, указанных в массиве data_obj
for(iso in data_obj){
    highlighted_states[iso]  = selectRegion;
}  
$(document).ready(function() {
    $('#vmap').vectorMap({
        map: 'russia',
        backgroundColor: '#ffffff',
        borderColor:  '#ffffff',
        borderWidth:  2,
        color: colorRegion,
        colors:  highlighted_states,
        hoverOpacity: 0.7,
        enableZoom: true,
        showTooltip: true,
        //  Отображаем объекты если они есть
        onLabelShow:  function(event, label, code){
            name  = '<strong>'+label.text()+'</strong><br>';
            if(data_obj[code]){
                list_obj  = '<ul class="jqvmapfancy">';
                for(ob  in data_obj[code]){
                    list_obj  += '<li>'+data_obj[code][ob]+'</li>';
                }
                list_obj  += '</ul>';
            }else{
                list_obj  = '';
            }                                                             
            label.html(name  + list_obj);
            list_obj  = '';
        },                                            
        // Клик по региону
       onRegionClick: function (element, code, region) {
                var message = 'You clicked "' + name + '" which has the code: ' + code.toUpperCase();
                alert(message);
            }
    });
});
//  Выводим список объектов из массива
$(document).ready(function()  {
    for(region in data_obj){
        for(obj  in data_obj[region]){
            $('.list-object').append('<li><a  href="'+selectRegion+'" id="'+region+'"  class="focus-region">'+data_obj[region][obj]+'  ('+region+')</a></li>');
        }
    }
});  
//  Подсветка регионов при наведении на объекты
$(function(){
    $('.focus-region').mouseover(function(){
        iso  = $(this).prop('id');
        fregion  = {};
        fregion[iso]  = focusRegion;
        $('#vmap').vectorMap('set',  'colors', fregion);
    });
    $('.focus-region').mouseout(function(){
        c  = $(this).attr('href');
        cl  = (c === '#')?colorRegion:c;
        iso  = $(this).prop('id');
        fregion  = {};
        fregion[iso]  = cl;
        $('#vmap').vectorMap('set',  'colors', fregion);
    });
});
