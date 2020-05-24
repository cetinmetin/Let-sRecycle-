async function baglanti(){
        var response = await fetch("https://cors-anywhere.herokuapp.com/https://il-ilce-rest-api.herokuapp.com/v1/cities/41585da49f8b3330c12e64b11b0195b4/towns"
    )
        var data = new Array();
        data2= new Array();
        data = await response.json();
        for(i=0;i<data.data.length;i++)
        {
            //var x = document.getElementById("form_district");
            //var option = document.createElement("option");
            //option.text = data.data[i]['name'];
            //x.add(option);
            data2.push(data.data[i]['name']);
        }
        data2.sort();
        for(i=0;i<data.data.length;i++)
        {
            var x = document.getElementById("form_district");
            var option = document.createElement("option");
            option.text = data2[i];
            option.value= i+1;
            x.add(option);
         
        }
        return data2;
}

baglanti()
