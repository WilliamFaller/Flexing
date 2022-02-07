var apikey = 'H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs';

function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  group.addEventListener('tap', function (evt) {

    var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {

      content: evt.target.getData()
    });

    ui.addBubble(bubble);
  }, false);

  addMarkerToGroup(group, {lng: -46.6339, lat: -23.4594},
    '<div><a href="parques.php?id=1">Horto Florestal</a>' +
    '</div><div >R. do Horto, 931<br>Horario: 06:00–18:00</div>');

  addMarkerToGroup(group, {lng: -46.5306, lat: -23.4579},
    '<div><a href="parques.php?id=16">Parque Bosque Maia</a>' +
    '</div><div >Av. Paulo Faccini, s/n<br>Horario: 06:00–18:00</div>');

  addMarkerToGroup(group, {lng: -46.6097, lat: -23.5855},
    '<div><a href="parques.php?id=2">Parque Independência</a>' +
    '</div><div>Av. Nazaré, s/n, 931<br>Horario: 05:00 - 20:00</div>');

  addMarkerToGroup(group, {lng: -46.6074, lat: -23.4667},
    '<div><a href="parques.php?id=1">Parque Lions Clube Tucuruvi</a>' +
    '</div><div>R. Alcindo Bueno de Assis, 500<br>Horario: 06:00 - 18:00</div>');

    addMarkerToGroup(group, {lng: -46.7015, lat: -23.5893,},
    '<div><a href="parques.php?id=4">Parque Alfredo Volpi</a>' +
    '</div><div >R. Engenheiro Oscar Americano, 480<br>Horario: 06:00 - 18:00</div>');

      addMarkerToGroup(group, {lng: -46.7221, lat: -23.6333},
    '<div><a href="parques.php?id=5">Parque Burle Marx</a>' +
    '</div><div >Av. Dona Helena Pereira de Moraes, 200<br>Horario: 07:00 - 19:00</div>');

        addMarkerToGroup(group, {lng: -46.6573, lat: -23.5623},
    '<div><a href="parques.php?id=6">Parque Trianon</a>' +
    '</div><div >R. Peixoto Gomide, 949<br>Horario: 06:00 - 18:00</div>');

        addMarkerToGroup(group, {lng: -46.6881, lat: -23.589},
    '<div><a href="parques.php?id=7">Parque do Povo</a>' +
    '</div><div >Av. Henrique Chamma, 420<br>Horario: 06:00 - 22:00</div>');


        addMarkerToGroup(group, {lng: -46.7263, lat: -23.544},
    '<div><a href="parques.php?id=11">Parque Villa Lobos</a>' +
    '</div><div >Av. Prof. Fonseca Rodrigues, 2001<br>Horario: 05:30 às 19:00</div>');

        addMarkerToGroup(group, {lng: -46.4899088, lat: -23.5525943},
    '<div><a href="parques.php?id=10">Academia ao Ar Livre</a>' +
    '</div><div >R. José Taliberti, 94<br>Horario: Aberto 24hrs</div>');

        addMarkerToGroup(group, {lng: -46.4693, lat: -23.5708},
    '<div><a href="parques.php?id=8">Parque do Carmo</a>' +
    '</div><div >R. José Taliberti, 94<br>Horário: 05:30 - 20:00 </div>');

        addMarkerToGroup(group, {lng: -46.6822, lat: -23.5197},
    '<div><a href="parques.php?id=9">Parque Jardim das Perdizes</a>' +
    '</div><div >Passagem Quatro, S/N<br>Horario: 06:00 - 22:00</div>');

        addMarkerToGroup(group, {lng: -46.7272, lat: -23.5808},
    '<div><a href="parques.php?id=12">Parque Previdência</a>' +
    '</div><div >Rua Pedro Peccinini, 88<br>Horario: 07:00 - 18:00</div>');//

        addMarkerToGroup(group, {lng: -46.7436, lat: -23.6011},
    '<div><a href="parques.php?id=13">Parque Municipal Chácara do Jockey</a>' +
    '</div><div >Av. Prof. Francisco Morato, 5300<br>Horario: 06:00 - 20:00</div>');

        addMarkerToGroup(group, {lng: -46.7219, lat: -23.508},
    '<div><a href="parques.php?id=14">Parque Cidade de Toronto</a>' +
    '</div><div >Av. Cardeal Motta, 84<br>Horario: 06:00 - 18:00</div>');

        addMarkerToGroup(group, {lng: -46.7362, lat: -23.5016},
    '<div><a href="parques.php?id=15">Parque São Domingos</a>' +
    '</div><div >Av. Cardeal Motta, 84<br>Horario: 07:00 - 18:00 </div>');

        addMarkerToGroup(group, {lng: -46.6288, lat: -23.5725},
    '<div><a href="parques.php?id=16">Parque Aclimação</a>' +
    '</div><div >Av. Muniz de Sousa, 1119<br>Horario: 05:00 - 20:00 </div>');

        addMarkerToGroup(group, {lng: -46.5735, lat: -23.5277},
    '<div><a href="parques.php?id=17">Parque Piqueri</a>' +
    '</div><div >R. Tuiuti, 515 <br>Horario: 06:00 - 18:00 </div>');

        addMarkerToGroup(group, {lng: -46.6235, lat: -23.5076},
    '<div><a href="parques.php?id=18">Parque da Juventude</a>' +
    '</div><div >Av. Cruzeiro do sul, 2630<br>Horario: 06:00 - 19:00 </div>');

}


var platform = new H.service.Platform({
  apikey: window.apikey
});
var defaultLayers = platform.createDefaultLayers();

var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lng: -46.63, lat: -23.54},
  zoom: 12,
  pixelRatio: window.devicePixelRatio || 1
});

window.addEventListener('resize', () => map.getViewPort().resize());

var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var ui = H.ui.UI.createDefault(map, defaultLayers);

addInfoBubble(map);