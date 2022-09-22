var base_url = `${location.origin}`;
//base_url = 'http://www.cidadeintegradadrupal.proderj.rj.gov.br/'


/* Inicio Scripts Genericos */
var completeDate = (numero) => {
  if (numero <= 9)
    return "0" + numero;
  else
    return numero;
}

var toDate = (dateStr) => {
  var parts = dateStr
    .split("T")[0]
    .split("-");

  return new Date(parts[0], parts[1] - 1, parts[2])
}

var sortFunction = (a, b) => {
  var dateA = new Date(a.Date).getTime();
  var dateB = new Date(b.Date).getTime();
  return dateA > dateB ? 1 : -1;
}
/* Fim Scripts Genericos */




/* Inicio Scripts Especificos */
var get = async (myUrl) => {

  var url = `${base_url}/${myUrl}`;
  var init = {
    method: 'GET'
  };
  if (self.fetch) {
    var resp = await fetch(url, init);
    return await resp.json();
  } else {
    console.log('Fectch não existe');
  }
};

var CallbackCalendar = (obj) => {
  let dateFilter = obj.Selected.Year + '-' + completeDate(obj.Selected.Month);

  setResume(obj.Model, dateFilter);
}

var setCalendar = (events, id) => {
  var element = document.getElementById(id);
  var settings = {};
  caleandar(element, events, settings);
}

var setResume = (events, dateFilter) => {

  let element = document.getElementById('popup');
  let domPopup = ""
  let countRegs = 0;

  events.sort(sortFunction);

  //events.slice(0,6).forEach(event => { 
  events.forEach(event => {
    let meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    let data = ((completeDate(event.Date.getDate()) + " de " + meses[(event.Date.getMonth())]));

    let eve = event.Date.getFullYear() + '-' + completeDate(event.Date.getMonth())

    if (eve == dateFilter) {
      countRegs++;
      domPopup +=
        `<div class="cld-container"><div class="cld-date-resume">${data}</div>
          <div class="cld-description-resume">${event.Description}</div></div>`
    }
  })

  if (countRegs == 0)
    domPopup = `<div class="cld-container"><div class="cld-date-resume">Nenhum evento agendado!</div></div>`

  element.innerHTML = domPopup;
}

var main = () => {

  var objTela = document.getElementsByClassName('calendar');

  if (objTela != null) {
    for (var i = 0; i < objTela.length; i++) {

      var myUrl = objTela[i].getAttribute('data-url');
      var id = objTela[i].id;
      get(myUrl)
        .then((response) => {
          return response.rows.map((item) => {
            return {
              Date: toDate(item.date),
              Title: item.title,
              Description: item.description,
            };
          });
        })
        .then((events) => {
          console.log(id);
          setCalendar(events, id);


        }).catch((error) => {
          alert("Erro ao abrir calendario");
          console.error(error);
        });
    }

  }
}

main();






