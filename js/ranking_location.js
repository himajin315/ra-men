
var RankingLocation = {
    get_coordinate : function(location_array) {
        //i == ranking_num
        var sum_latitude = 0;
        var sum_longitude = 0;
        for (var i; i<3; i++) {
            sum_latitude = location_array[i].latitude;
            sum_longitude = location_array[i].longitude;
        }
        return this.average(sum_latitude, sum_longitude, location_array.length);
    },
    
    average : function(sum_latitude, sum_longitude, array_num) {
        var temp = {
            "ave_latitude": sum_latitude / array_num,
            "ave_longitude": sum_longitude/ array_num
        };

        return temp;
    },
};

function generate_map() {
    var rl = new RankingLocation();
    var dic - rl.get_coordinate(location_array);
    map = new ZDC.Map(
           document.getElementById("ZMap"),
           {
               latlon = new ZDC.LatLon(dic["ave_latitude"], dic["ave_longitude"]);
           }
            );

    for (var i; i<location_array.length; i++) {
        var marker = new ZDC.Marker(location_array[i].latitude, location_array[i].longitude);
        map.addWidget(marker);
    }
};
