var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
var bwpath='vendor/bower/';
 var dtDir =bwpath+'datatables-plugins/integration/';

elixir(function(mix) {

	/**
	 *copy anyy needed sass file to the the resources/assets/sass directory
	 * 
	 */
	//mix.copy();
	
	 
	/**
	 *compile any sacc files in sass directory to css directory
	 * 
	 */
    mix.sass('app.scss','resources/assets/css'); 



    /**
     *Copy all the needed js files into resources/assets/js/ dir
     * 
     */
    mix.copy(bwpath+'jquery/dist/jquery.js','resources/assets/js/') //copy jquery javascript framework
    	.copy(bwpath+'bootstrap/dist/css/bootstrap.css','resources/assets/css/') //bootstrap
        .copy(bwpath+'fontawesome/css/font-awesome.css','resources/assets/css/') //fontawesome
        .copy(dtDir + 'bootstrap/3/dataTables.bootstrap.css','resources/assets/css/') //datatables
        
        .copy(bwpath+'bootstrap/dist/js/bootstrap.js','resources/assets/js/')  //bootstrap js
        .copy(bwpath+"datatables/media/js/jquery.dataTables.js",'resources/assets/js/')  //datatable js
        .copy(dtDir+'bootstrap/3/dataTables.bootstrap.js','resources/assets/js/') //datatable js
        .copy(bwpath+'vue/dist/vue.js','resources/assets/js/')  //vue js        
        .copy(bwpath+'vue-resource/dist/vue-resource.js','resources/assets/js/')  //vue-resource
         
        .copy(bwpath+'bootstrap/dist/fonts/**','public/build/fonts') //Font copying  
        .copy(bwpath+'bootstrap/dist/fonts/**','public/assets/fonts'); //Font copying  


    /**
     * combine all css files into one css file and place it in public/css dir
     */
    mix.styles(['app.css',
        'dataTables.bootstrap.css',
        'bootstrap.css',
        'font-awesome.css',
        'style.css'
        ]); 
  
    /**
     *Combine all js files and place the file in public/js file
     * 
     */
    mix.scripts(['jquery.js',
    			'bootstrap.js',
                'jquery.dataTables.js',
                'dataTables.bootstrap.js',
                'vue.js',
                'vue-resource.js'
    				]);

    /**
     *Version the files. The files are kept in a build dir under css and js dir respectively
     * 
     */
     mix.version(['css/all.css', 'js/all.js']);

     /**
      *The files can be refence using the elixir function:<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
      * The function references from build folder bby default
      */
});
