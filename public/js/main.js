function cloneTag(tag,index_select,name,tag_add){
    var select_clone = tag.cloneNode(true);
    console.log(select_clone);
    select_clone.removeAttribute('id');
    select_clone.setAttribute('name', name.replace("i_v",parseInt(index_select)+1));
    document.getElementById(tag_add).appendChild(select_clone);
}

function removeTag(tag,idx_child){
    if (tag.children.length > 2){
        tag.children[idx_child].remove();
    }
}


if (document.getElementById('btn_add_profile')){
    document.getElementById('btn_add_profile').addEventListener('click', function(){
        var index = document.getElementById('div_form_profile').children.length - 2;
        cloneTag(document.getElementById('div_form_profile').children[index+1],index,"profile[i_v]",'div_form_profile');
        cloneTag(document.getElementById('div_form_technician_id_trc').children[index+1],index,"technician_id_trc[i_v]",'div_form_technician_id_trc');
        index++;
    });
}

if (document.getElementById('btn_del_profile')){
     document.getElementById('btn_del_profile').addEventListener('click', function(){
         var index = document.getElementById('div_form_profile').children.length - 1;
         removeTag(document.getElementById('div_form_profile'),index);
         removeTag(document.getElementById('div_form_technician_id_trc'),index);
     });
}


if (document.getElementById('btn_add_profile_edit')){
    document.getElementById('btn_add_profile_edit').addEventListener('click', function(){
        var index = document.getElementById('div_form_profile').children.length - 2;
        cloneTag(document.getElementById('div_form_profile').children[index+1],index,"profile[i_v]",'div_form_profile');
        cloneTag(document.getElementById('div_form_technician_id_trc').children[index+1],index,"technician_id_trc[i_v]",'div_form_technician_id_trc');
        index++;
    });
    
    
}

if (document.getElementById('btn_del_profile_edit')){
     document.getElementById('btn_del_profile_edit').addEventListener('click', function(){
         var index = document.getElementById('div_form_profile').children.length - 1;
         removeTag(document.getElementById('div_form_profile'),index);
         removeTag(document.getElementById('div_form_technician_id_trc'),index);
     });
}


//botones de agregar o eliminar horario de caider(create)
if (document.getElementById('btn_add_schedule')){
    document.getElementById('btn_add_schedule').addEventListener('click', function(){
        var index = document.getElementById('div_form_schedule_from').children.length - 2;
        cloneTag(document.getElementById('div_form_schedule_from').children[index+1],index,"schedule_from[i_v]",'div_form_schedule_from');
        cloneTag(document.getElementById('div_form_schedule_to').children[index+1],index,"schedule_to[i_v]",'div_form_schedule_to');
        cloneTag(document.getElementById('div_form_weekday').children[index+1],index,"weekday[i_v]",'div_form_weekday');
        index++;
    });
}

if (document.getElementById('btn_del_schedule')){
     document.getElementById('btn_del_schedule').addEventListener('click', function(){
         var index = document.getElementById('div_form_schedule_from').children.length - 1;
         removeTag(document.getElementById('div_form_schedule_from'),index);
         removeTag(document.getElementById('div_form_schedule_to'),index);
          removeTag(document.getElementById('div_form_weekday'),index);
     });
}

