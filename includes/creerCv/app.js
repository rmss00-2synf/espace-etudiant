

$(document).ready(function(){
    let i =1;
    $(".comp").click(function(){
        $(".cmpd").append('<input type="text" id="competence" name="competence'+i+'"> <input type="number" id="pourcentage" name="pourcentage'+i+'" min="0" max="100" required>')
        i++;
    });
    $(".edu").click(function(){
        $(".edud").append('<div class="education"> <div class="education-item">\
          <label for="edu-start1">Début</label>\
          <input type="date" id="edu-start1" name="edu-start1'+i+'" required>\
          <label for="edu-end1">Fin</label>\
          <input type="date" id="edu-end1" name="edu-end1'+i+'" required>\
          <label for="edu-title1">Titre</label>\
          <input type="text" id="edu-title1" name="edu-title1'+i+'" required>\
          <label for="edu-content1">Contenu</label>\
          <textarea id="edu-content1" name="edu-content1'+i+'" rows="2" required></textarea>\
        </div>\
      </div>')
      i++;
    });

    $(".expp").click(function(){
        $(".exppd").append('<div class="work-experience">\
        <div class="experience-item">\
          <label for="work-start1">Début</label>\
          <input type="date" id="work-start1" name="work-start1'+i+'" required>\
          <label for="work-end1">Fin</label>\
          <input type="date" id="work-end1" name="work-end1'+i+'" required>\
          <label for="work-title1">Titre</label>\
          <input type="text" id="work-title1" name="work-title1'+i+'" required>\
          <label for="work-content1">Contenu</label>\
          <textarea id="work-content1" name="work-content1'+i+'" rows="2" required></textarea>\
        </div>\
      </div>')
      i++;
    
    });
    
});