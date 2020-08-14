$(document).ready(function () {

    window.setAwesomeIconValue = function (htmlElement, e, i) {

        let select = "<select class='js-project-edit-awesome-icons-tile-"+ (e + 1) +"'></select><br>";

        htmlElement.append(select);

        // get awesome icons
        $.ajax({
            type: "GET",
            url: route('awesome-icons.show'),
            success: function (iconData) {

                // console.log('ovo su icon data podaci: ' + iconData.awesomeIcons);

                output = [];
                $.each(iconData.awesomeIcons, function (u, j) {

                    // console.log('ovo je i:' + i);
                    // console.log('ovo je j:' + j);

                    if (j.id === i.awesome_icon_id) {

                        output += '<option selected value="'+ j.id +'" data-id="'+ j.id +'">'+ j.name + '</option>'

                    }
                    else {

                        output += '<option value="'+ j.id +'" data-id="'+ j.id +'">'+ j.name + '</option>'
                    }


                });
                $(".js-project-edit-awesome-icons-tile-" + (e + 1)).append(output)
            }
        });

    }

})

