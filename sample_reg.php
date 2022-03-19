<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/nav.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >

        <div id="wrapper">
            <!-- /#sidebar-wrapper -->
            <?php
            include_once './controal/nav.php';
            ?>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">



                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12 col-lg-offset-2">



                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-basic-tab" data-toggle="pill" href="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="true">1.  Basic Registration Data ->></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-gis-tab" data-toggle="pill" href="#pills-gis" role="tab" aria-controls="pills-gis" aria-selected="false"> 2. GIS Coordinate ->></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-selected="false">3. Location Data ->> </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-eco-tab" data-toggle="pill" href="#pills-eco" role="tab" aria-controls="pills-eco" aria-selected="false">4. Eco System ->> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-plant-tab" data-toggle="pill" href="#pills-plant" role="tab" aria-controls="pills-plant" aria-selected="false">5. Plant Characteristics ->> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-population-tab" data-toggle="pill" href="#pills-population" role="tab" aria-controls="pills-population" aria-selected="false">6. Population Variation ->> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-captured-tab" data-toggle="pill" href="#pills-captured" role="tab" aria-controls="pills-captured" aria-selected="false">7. Captured Live </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-collectors">Collectors </label>
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" name="collectors" type="text" id="collectors" data-error="Invalid Entry" placeholder="Collectors" data-plugin-maxlength rows="5" maxlength="1000"></textarea>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-collection_type">Collection Type<code>*</code></label>
                                        <div class="col-sm-8">

                                            <select data-plugin-selectTwo class="form-control populate" id="collection_type" name="collection_type" required>
                                                <option value="C">C</option>
                                                <option value="AR">AR</option>
                                                <option value="I">I</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-program_name">Program Name </label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="program_name" type="text" id="program_name" data-error="Invalid Entry" placeholder="Program">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-area_explored">Area Explored </label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="area_explored" type="text" id="area_explored" data-error="Invalid Entry" placeholder="Area Explored ">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-species_name">Species Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="species_name" type="text" id="species_name" data-error="Invalid Entry" placeholder="Species Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-common_name">Common Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="common_name" type="text" id="common_name" data-error="Invalid Entry" placeholder="Common Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-cultivar_table">Cultivar Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="cultivar_table" type="text" id="cultivar_table" data-error="Invalid Entry" placeholder="Cultivar Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-register_date">Date of Registration<code>*</code></label>
                                        <div class="col-sm-2">
                                            <input class="form-control" name="register_date" type="date" id="register_date"  placeholder="Register Date" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Collection No:<code>*</code></label>
                                        <div class="col-md-8">
                                            <div data-plugin-spinner data-plugin-options='{ "value":1, "min": 1, "max": 9999 }'>

                                                <input type="number" id="collection_no" class="spinner-input form-control" maxlength="4" required >


                                            </div>
                                            <p>
                                                with <code>max</code> value set to 9999
                                            </p>
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-registration_no">Registration No</label>
                                        <div class="col-sm-2">
                                            <input type="text" disabled class="form-control" name="registration_no" id="registration_no" required>
                                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="registration_no_button" onclick="getRegNo();">Generate Registration Number</button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-registration_no">Accession No</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control input-sm" name="accession_no" id="accession_no" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-location">Location</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="location" type="text" id="location" data-error="Invalid Entry"  placeholder="Location">
                                        </div>
                                    </div>

                                    <!--<div class="col-sm-8">
                                            <input class="form-control input-sm" name="collectors" type="text" id="collectors" data-error="Invalid Entry" placeholder="Team ID">
                                    </div>-->



                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-collection_date">Collection Date </label>
                                        <div class="col-sm-2">

                                            <input type="date"  class="form-control" name="collection_date" id="collection_date" placeholder="Collection Date">

                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">

                                                <button type="button" class="btn btn-primary" id="next_basic"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-gis" role="tabpanel" aria-labelledby="pills-gis-tab">
                                    <div class="form-group row">
                                        <div id="map" style="width:100%;height:500px"></div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-4 control-label" for="w1-latitude">Latitude</label>
                                        <div class="col-sm-4">
                                            <input id="lat" name="lat" class="form-control" type="text"  data-builder-field="latlng">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-4 control-label" for="w1-longitude">Longitude</label>
                                        <div class="col-sm-4">
                                            <input id="lng" name="lng" class="form-control" type="text"  data-builder-field="latlng">
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-altitude">Altitude</label>
                                        <div class="col-sm-4">
                                            <input id="altitude" name="altitude" type="text" class="form-control" data-builder-field="latlng">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-district">District</label>
                                        <div class="col-sm-4">

                                            <select class="form-control mb-md" name="district" id="district">
                                                <option value="">Select District</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-ds_division">Nearest Town</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" id="ds_division">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-village">Village</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" id="village">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-distance">Distance(Km)</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control input-sm" id="distance">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-farmer_name">Farmer/Land Holder Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" id="farmer_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-address">Address</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="3" id="address" data-plugin-maxlength maxlength="250"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">
                                                <button type="button" class="btn btn-primary" id ="pre_pills-gis"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                <button type="button" class="btn btn-primary" id="next_pills-gis"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-aquisition_source">Source(Acquisition)</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="source_acquisition" name="source_acquisition">
                                                <option value="0">Selected</option>
                                                <option value="1">Collected</option>
                                                <option value="2">Received</option>
                                                <option value="3">Introduced</option>
                                                <option value="4">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-source_collection">Source(Collection)</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="source_collection" name="source_collection">
                                                <option value="0">Selected</option>
                                                <option value="1">Natural wild</option>
                                                <option value="2">Disturbed wild</option>
                                                <option value="3">Farmers field</option>
                                                <option value="4">Threshing yard</option>
                                                <option value="5">Farm store</option>
                                                <option value="6">Market</option>
                                                <option value="7">Garden(Ex-Situ)</option>
                                                <option value="8">Institute</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-status">Status</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="status" name="status">
                                                <option value="0"> selected</option>
                                                <option value="1">Wild</option>
                                                <option value="2">Weedy</option>
                                                <option value="3">Landrace/Primitive Cultivar</option>
                                                <option value="4">Improved</option>
                                                <option value="5">Breeding Variety</option>
                                                <option value="6">Breeding Live</option>
                                                <option value="7">Unknown</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-frequency">Frequency</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="frequency" name="frequency">
                                                <option value="0">Selected</option>
                                                <option value="1">Abundant</option>
                                                <option value="2">Frequently</option>
                                                <option value="3">Occasional</option>
                                                <option value="4">Rare</option>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-collection_method">Collection Method</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control mb-md" id="collection_method" name="collection_method">
                                                <option value="0">Select</option>
                                                <option value="1">Bulk</option>
                                                <option value="2">Random</option>
                                                <option value="3">Selective(Non random)</option>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-state">State</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="state" name="state">
                                                <option value="0">Select</option>
                                                <option value="1">Vegetative</option>
                                                <option value="2">Flowering</option>
                                                <option value="3">Mature</option>
                                                <option value="4">Past Maturity</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-material">Material<code>*</code></label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="material" name="material" required>
                                                <option value="0">Select</option>
                                                <option value="1">Seed</option>
                                                <option value="2">Fruit</option>
                                                <option value="3">Inflorescence</option>
                                                <option value="4">Root</option>
                                                <option value="5">Tubers</option>
                                                <option value="6">Rhizomes</option>
                                                <option value="7">Suckers</option>
                                                <option value="8">Bud wood</option>
                                                <option value="9">Live Plant</option>
                                                <option valu="10">Others(Specify)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-sample_type">Sample Type</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="sample_type" name="sample_type">
                                                <option value="0">Select</option>
                                                <option value="1">Population</option>
                                                <option value="2">Pure Line</option>
                                                <option valu="3">Individual Plant</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-population_size">Population Size</label>
                                        <div class="col-sm-8">

                                            <input type="number" class="form-control input-sm" id="population_size" step="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-population_associated">Population Associated With</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" id="population_asso_with">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Season</label>
                                        <div class="col-sm-8">
                                            <select  class="form-control populate" id="season" name="season">
                                                <option value="0">Select Season</option>
                                                <option value="1">Yala</option>
                                                <option value="2">Maha</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-planting_date">Planting/Showing Date</label>
                                        <div class="col-sm-2">


                                            <input type="date"  class="form-control" name="planting_date" id="planting_date" data-error="Invalid Entry" placeholder="Accession Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-harvesting_date">Harvesting Date</label>
                                        <div class="col-sm-2">

                                            <input type="date"  class="form-control" name="harvesting_date" id="harvesting_date" data-error="Invalid Entry" placeholder="Accession Date">


                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-habitat">Habitat</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="habitat" name="habitat">
                                                <option value="0">Select</option>
                                                <option value="1">Cultivated</option>
                                                <option value="2">Disturbed</option>
                                                <option value="3">Partly Disturbed</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">
                                                <button type="button" class="btn btn-primary" id ="pre_pills-location"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                <button type="button" class="btn btn-primary" id="next_pills-location"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-eco" role="tabpanel" aria-labelledby="pills-eco-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-land_aspect">Land Aspect</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="land_aspect" name="land_aspect">
                                                <option value="0">Select</option>
                                                <option value="1">Level</option>
                                                <option value="2">Crest</option>
                                                <option value="3">Escarpment</option>
                                                <option value="4">Summit</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-topography">Topography</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="topography" name="topography">
                                                <option value="0">Select</option>
                                                <option value="1">Swamp</option>
                                                <option value="2">Flood Plain</option>
                                                <option value="3">Level</option>
                                                <option value="4">Undulating</option>
                                                <option value="5">Swamp Dissected</option>
                                                <option value="6">Steeply Dissected</option>
                                                <option value="7">Mountainous</option>
                                                <option value="8">Valley</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-site">Site</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="site" name="site">
                                                <option value="0">Select</option>
                                                <option value="1">Level</option>
                                                <option value="2">Terrace</option>
                                                <option value="3">Lower Slope</option>
                                                <option value="4">Open Depression</option>
                                                <option value="5">Close Depression</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-slope_degree">Slope Degree</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control input-sm" id="slope_degree" data-error="Invalid Entry">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-soil_color">Soil Color</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="soil_color" name="soil_color">
                                                <option value="0">Select</option>
                                                <option value="1">Black</option>
                                                <option value="2">Yellow</option>
                                                <option value="3">Red</option>
                                                <option value="4">Brown</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-soil_color">Soil Texture</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="soil_texture" name="soil_texture">
                                                <option value="0">Select</option>
                                                <option value="1">Sandy</option>
                                                <option value="2">Sandy Loam</option>
                                                <option value="3"Loam</option>
                                                <option value="4">Silt Loam</option>
                                                <option value="5">Clay</option>
                                                <option value="6">Silt</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-shading">Shading Percentage</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="shading" name="shading">
                                                <option value="0">Select</option>
                                                <option value="1">Heavy</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Light</option>
                                                <option value="4">Open(None)</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-disturbance_degree">Degree of Disturbance</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="disturbance_degree" name="disturbance_degree">
                                                <option value="0">Select</option>
                                                <option value="1">High</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Light</option>
                                                <option value="4">None</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-disease_sym_leaf">Disease Symptoms in Leaf</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="disease_sym_leaf" name="disease_sym_leaf">
                                                <option value="0">Select</option>
                                                <option value="1">Mild</option>
                                                <option value="2">Moderate</option>
                                                <option value="3">High</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-disease_sym_seed">Disease Symptoms in Pods/Seeds</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="disease_sym_seed" name="disease_sym_seed">
                                                <option value="0">Select</option>
                                                <option value="1">Mild</option>
                                                <option value="2">Moderate</option>
                                                <option value="3">High</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-infection_leaf">Insect / Pest Infection in Leaf</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="infection_leaf" name="infection_leaf">
                                                <option value="0">Select</option>
                                                <option value="1">Mild</option>
                                                <option value="2">Moderate</option>
                                                <option value="3">High</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-infection_seed">Insect / Pest Infection in Seed</label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo class="form-control populate" id="infection_seed" name="infection_seed">
                                                <option value="0">Select</option>
                                                <option value="1">Mild</option>
                                                <option value="2">Moderate</option>
                                                <option value="3">High</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">
                                                <button type="button" class="btn btn-primary" id ="pre_pills-eco"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                <button type="button" class="btn btn-primary" id="next_pills-eco"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-plant" role="tabpanel" aria-labelledby="pills-plant-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-plant_hieght">Plant Hieght</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control input-sm" id="plant_height">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-plant_type">Plant Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" id="plant_type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-flower_type">Flower Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" id="flower_type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-flower_color">Flower Color</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" id="flower_color">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">
                                                <button type="button" class="btn btn-primary" id ="pre_pills-plant"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                <button type="button" class="btn btn-primary" id="next_pills-plant"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pills-population" role="tabpanel" aria-labelledby="pills-population-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-population_variation">Population Variation</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="5" id="population_variation" data-plugin-maxlength maxlength="300"></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label" for="w1-notes">Note/Uses</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="5" id="note" name="note" data-plugin-maxlength maxlength="500"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-md-12 d-flex flex-row-reverse"> 
                                            <div clas="row d-flex justify-content-end ">
                                                <button type="button" class="btn btn-primary" id ="pre_pills-population"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                <button type="button" class="btn btn-primary" id="next_pills-population"> Next <i class="fas fa-arrow-circle-right"></i></button>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-captured" role="tabpanel" aria-labelledby="pills-captured-tab">
                                    <form id="captured_frm" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row d-none ">
                                            <label class="col-sm-4 control-label">Set ID</label>
                                            <input type="text" class="col-sm-4 control-label" id="set_id_basic" name="set_id_basic">

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Select Photo :1</label>
                                            <input type="file" class="col-sm-4 control-label" id="photo1" name="photo1">

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Select Photo :2</label>
                                            <input type="file" class="col-sm-4 control-label" id="photo2" name="photo2">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Select Photo :3</label>
                                            <input type="file" class="col-sm-4 control-label" id="photo3" name="photo3">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Select Photo :4</label>
                                            <input type="file" class="col-sm-4 control-label" id="photo4" name="photo4">
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label" for="w1-herb_specimen">Herb Specimen</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control input-sm" id="herb_specimen" name="herb_specimen" data-error="Invalid Entry">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label" for="w1-herb_no">Herbarium Number</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control input-sm" id="herb_no" name="herb_no"  data-error="Invalid Entry">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label" for="w1-herb_coll_no">Herbarium Collection No</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control input-sm" id="herb_coll_no" name="herb_coll_no"  data-error="Invalid Entry">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label" for="w1-sketch_map">Sketch Map</label>
                                            <input type="file" class="col-sm-4 control-label" id="sketch_map" name="sketch_map">
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-md-12 d-flex flex-row-reverse"> 
                                                <div clas="row d-flex justify-content-end ">
                                                    <button type="button" class="btn btn-primary" id ="pre_pills-captured"><i class="fas fa-arrow-circle-left"></i>Previous</button>                           
                                                    <button type="submit" class="btn btn-primary" id="next_pills-captured"> Finish <i class="fas fa-arrow-circle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmtr8eTZOZU8O9jbf9jPjGi0p7fTQWRzI&callback=initMap&libraries=&v=weekly" async></script>

    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/all.js" type="text/javascript"></script>
    <script src="js/comboload.js" type="text/javascript"></script>
    <script src="js/sample_reg.js" type="text/javascript"></script>
    <script>
                                                // Initialize and add the map
                                                function initMap() {
                                                    const myLatlng = {lat: 7.888, lng: 80.655};
                                                    const map = new google.maps.Map(document.getElementById("map"), {
                                                        zoom: 7,
                                                        center: myLatlng,
                                                    });
                                                    // Create the initial InfoWindow.
                                                    let infoWindow = new google.maps.InfoWindow({
                                                        content: "Click the map to get Lat/Lng!",
                                                        position: myLatlng,
                                                    });

                                                    infoWindow.open(map);
                                                    // Configure the click listener.
                                                    map.addListener("click", (mapsMouseEvent) => {
                                                        // Close the current InfoWindow.
                                                        infoWindow.close();
                                                        // Create a new InfoWindow.
                                                        infoWindow = new google.maps.InfoWindow({
                                                            position: mapsMouseEvent.latLng,

                                                        });
                                                        infoWindow.setContent(
                                                                JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                                                                );
                                                        infoWindow.open(map);
                                                        $('#lat').val(mapsMouseEvent.latLng.lat());
                                                        $('#lng').val(mapsMouseEvent.latLng.lng());
                                                    });
                                                }

///
                                                $(document).ready(function () {
                                                    var trigger = $('.hamburger'),
                                                            overlay = $('.overlay'),
                                                            isClosed = false;

                                                    trigger.click(function () {
                                                        hamburger_cross();
                                                    });

                                                    function hamburger_cross() {

                                                        if (isClosed === true) {
                                                            /// overlay.hide();
                                                            trigger.removeClass('is-open');
                                                            trigger.addClass('is-closed');
                                                            isClosed = false;
                                                        } else {
                                                            overlay.show();
                                                            trigger.removeClass('is-closed');
                                                            trigger.addClass('is-open');
                                                            isClosed = true;
                                                        }
                                                    }

                                                    $('[data-toggle="offcanvas"]').click(function () {
                                                        $('#wrapper').toggleClass('toggled');
                                                    });
                                                });

                                                $(window).on('load', function () {

                                                    loadDistrict();

                                                });


///

                                                $('#next_basic').on('click', function () {

                                                    $('a[href="#pills-gis"]').tab('show');

                                                });
                                                $('#pre_pills-gis').on('click', function () {

                                                    $('a[href="#pills-basic"]').tab('show');

                                                });
                                                $('#next_pills-gis').on('click', function () {

                                                    $('a[href="#pills-location"]').tab('show');

                                                });
                                                //
                                                $('#pre_pills-location').on('click', function () {

                                                    $('a[href="#pills-gis"]').tab('show');

                                                });
                                                $('#next_pills-location').on('click', function () {

                                                    $('a[href="#pills-eco"]').tab('show');

                                                });
                                                //
                                                $('#pre_pills-eco').on('click', function () {

                                                    $('a[href="#pills-location"]').tab('show');

                                                });
                                                $('#next_pills-eco').on('click', function () {

                                                    $('a[href="#pills-plant"]').tab('show');

                                                });
                                                //
                                                $('#pre_pills-plant').on('click', function () {

                                                    $('a[href="#pills-eco"]').tab('show');

                                                });

                                                $('#next_pills-plant').on('click', function () {

                                                    $('a[href="#pills-population"]').tab('show');

                                                });
                                                //
                                                $('#pre_pills-population').on('click', function () {

                                                    $('a[href="#pills-plant"]').tab('show');

                                                });

                                                $('#next_pills-population').on('click', function () {

                                                    $('a[href="#pills-captured"]').tab('show');

                                                    saveSample();

                                                });
                                                //
                                                $('#pre_pills-captured').on('click', function () {

                                                    $('a[href="#pills-population"]').tab('show');

                                                });


                                                $("#captured_frm").on('submit', (function (e) {
                                                    e.preventDefault();

                                                    $.ajax({
                                                        url: "model/sql_sample_reg.php", // Url to which the request is send
                                                        type: "POST", // Type of request to be send, called as method
                                                        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                                                        contentType: false, // The content type used when sending data to the server.
                                                        cache: false, // To unable request pages to be cached
                                                        processData: false, // To send DOMDocument or non processed data file it is set to false
                                                        success: function (data)   // A function to be called if request succeeds
                                                        {

                                                        }
                                                    });

                                                }));

    </script>

</html>

