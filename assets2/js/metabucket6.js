

$(function() {

  // Used for accessing the GCS JSON API.
  var GCS_BASE_URL = 'https://www.googleapis.com/storage/v1';

  // Used for downloading the contents of a file through CORS.
  var GCS_DOWNLOAD_URL = 'http://' + GCS_BUCKET + '.storage.googleapis.com';

  // XHR request objects returned from $.ajax.
  var metadata_xhr = null;
  var contents_xhr = null;

  /*
   * Forms a URL to the GCS JSON API given a path and an optional list of query
   * parameters to include.
   */
  function make_gcs_url(path, params) {
    var query_string = '?key=' + GCS_API_KEY;
    if (params != undefined) {
      for (prop in params) {
        query_string += '&' + prop + '=' + params[prop];
      }
    }
    return GCS_BASE_URL + path + query_string;
  };

  /*
   * Converts a GCS object name to a name for showing to the user. The object
   * name from GCS's perspective is opaque, but we treat / characters as having
   * a special meaning. The display name of an object is its last component,
   * e.g. the display name of /foo/bar is just bar.
   */
  function display_name(s) {
    var i, pieces = s.split('/');
    for (i = pieces.length - 1; i >= 0; i--) {
      if (pieces[i].length > 0) {
        return pieces[i];
      }
    }
    return 'ERROR';
  };

  /*
   * Converts the GCS JSON API object listing result to jsTree JSON data format.
   * For details, see:
   *   https://developers.google.com/storage/docs/json_api/v1/objects/list
   *   http://www.jstree.com/documentation/json_data
   */
  function convert_gcs_to_jstree(data) {
    var i, item, prefix, results = [];
	var album = document.getElementById('album_list');

    // Get directory prefixes
    if (data.prefixes !== undefined) {
      for (i = 0; i < data.prefixes.length; i++) {
        prefix = data.prefixes[i];
        results.push({'data': display_name(prefix),
                      'attr': {'gcs_id': prefix},
                      'state': 'closed'});  
                       var album_name = prefix.replace('/','');
					  var photo_name= prefix.replace('/','');  
					 // console.log(album_name);                	
								$.ajax({
   										 type:     "GET",
   										 url:      "https://www.googleapis.com/storage/v1/b/emomentum_marketing/o?delimiter=&prefix="+album_name+"&key=AIzaSyBc2oN4JLbO8XD3RG3Ey7aFzYl_uXYQgVQ",
   										 dataType: "json",
   										 success: function(data){
   										   var folderdata = data.items;
       									   var noofitems = folderdata.length;
       									   if(noofitems == 1){
       									   	  album.innerHTML = album.innerHTML + '<div class="col-sm-4 col-md-4 contract"><div class="panel panel-success"><div class="panel-heading head"style="background-color:#12A54A"><h3 class="panel-title "><font color="#ffffff">'+folderdata[0].name+'</font></h3></div><div class="panel-body"></div><ul class="list-group"><li class="list-group-item"></li></ul></div></div>';
       									   }
       									   else{
       									   	album.innerHTML = album.innerHTML + '<div class="col-sm-4 col-md-4 contract"><div class="panel panel-success"><div class="panel-heading head"style="background-color:#12A54A"><h3 class="panel-title "><font color="#ffffff">'+folderdata[0].name+'</font></h3></div><div class="panel-body"></div><ul id = "document_list" class="list-group" style = "max-height:184px;overflow:auto;">';
       									   	var document_list = document.getElementById('document_list');
       									   	for(var i= 1;i<=noofitems;i++){
       									   		
       									   		var document_name = folderdata[i].name.replace(folderdata[0].name, "");
       									   		document_name = document_name.replace("/", "");
       									   		document_list.innerHTML = document_list.innerHTML + '<li class="list-group-item"><a target = "_blank" style = "color:#000;padding:0px;"href = "https://docs.google.com/gview?url=https://storage.googleapis.com/emomentum_marketing/'+folderdata[0].name+document_name+'&embedded=true">'+document_name+'</a></li>';
       									   	}
       									   album.innerHTML = album.innerHTML + '</ul></div></div>';
       									   }
   											 }
										});
					 ;
	 				
	 }
    }
    // Get files in directory
    if (data.items !== undefined) {
      for (i = 0; i < data.items.length; i++) {
        item = data.items[i];
        results.push({'data': display_name(item.name),
                      'attr': {'gcs_id': item.name}});
					 console.log(item);
      }
    }

    return null;
  };

  /*
   * Fetches the contents of a jsTree directory on-demand when requested by a
   * user clicking to expand a prefix in the tree. The initial value for the
   * root of the tree is -1. For details on the function arguments, see:
   *   http://www.jstree.com/documentation/json_data
   */
  function data_fetch(node, data_callback) {
    if (node == -1) {
      $.ajax({
        url: make_gcs_url('/b/' + GCS_BUCKET + '/o', {'delimiter': '/'}),
        dataType: 'json',
        success: function(data, textStatus, xhr) {
          data_callback(convert_gcs_to_jstree(data));
        }
		
		
      });
    } else {
      $.ajax({
        url: make_gcs_url('/b/' + GCS_BUCKET + '/o',
          {'delimiter': '/',
           'prefix': node.attr('gcs_id')}),
        dataType: 'json',
        success: function(data, textStatus, xhr) {
          data_callback(convert_gcs_to_jstree(data));
		 // console.log(data_callback);
		  
        }
      });
    }
  };
  $('#jstree-gcs-demo').jstree({
    'plugins': ['themes', 'json_data', 'ui'],
    'themes': {
      'theme': '',
      'url': '<?php echo base_url();?>assets/css/style.css',
      'dots': false,
      'icons': false
    },
    'json_data': {
      'data': data_fetch,
      'progressive_render': true
    }
  }).bind('select_node.jstree', node_clicked);

});
