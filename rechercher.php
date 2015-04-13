<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css">
    <link rel="stylesheet" type="text/css" href="../../css/dataTables.editor.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="../resources/demo.css">
    <style type="text/css" class="init">

        table.dataTable tr td:first-child {
            text-align: center;
        }

        table.dataTable tr td:first-child:before {
            content: "\f096"; /* fa-square-o */
            font-family: FontAwesome;
        }

        table.dataTable tr.selected td:first-child:before {
            content: "\f046"; /* fa-check-square-o */
        }

        table.dataTable tr td.dataTables_empty:first-child:before {
            content: "";
        }

    </style>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" language="javascript" src="Data/js/dataTables.editor.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/demo.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/editor-demo.js"></script>
    <script type="text/javascript" language="javascript" class="init">


        var editor; // use a global for the submit and return data rendering in the examples

        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: "Data/php/staff.php",
                table: "#movies",

                fields: [{
                    label: "ID:",
                    name: "id"

                },{
                    label: "Titre:",
                    name: "title"
                },
                    {
                        label: "Genre:",
                        name: "gender"
                    }, {
                        label: "Année:",
                        name: "year"
                    }
                ]
            } );

            // Activate an inline edit on click of a table cell
            $('#movies').on( 'click', 'tbody td:not(:first-child)', function (e) {
                editor.inline( this );
            } );

            $('#movies').DataTable( {
                dom: "Tfrtip",
                ajax: "Data/php/staff.php",
                columns: [
                    { data: null, defaultContent: '', orderable: false },
                    { data: "title" },
                    { data: "gender" },
                    { data: "year" },

                ],
                order: [ 1, 'asc' ],
                tableTools: {
                    sRowSelect: "os",
                    sRowSelector: 'td:first-child',
                    aButtons: [
                        { sExtends: "editor_create", editor: editor },
                        { sExtends: "editor_edit",   editor: editor },
                        { sExtends: "editor_remove", editor: editor }
                    ]
                }
            } );
        } );



    </script>
</head>
<body id="page5">
<!--==============================header=================================-->
<header>
    <div class="row-1">
        <div class="main">
            <div class="container_12">
                <div class="grid_12">
                    <nav>
                        <ul class="menu">
                            <li><a href="welcome.php">Accueil</a></li>
                            <li><a class="active" href="rechercher.php">Rechercher</a></li>
                            <li><a href="presentation.php">Qui sommes-nous ?</a></li>
                            <li><a href="contact.php">Nous contacter</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="row-2">
        <div class="main">
            <div class="container_12">
                <div class="grid_9">
                    <h1>
                        <a class="logo" href="welcome.php">Eps<strong>i</strong>mdb</a>
                    </h1>
                </div>
                <div class="grid_3">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>

<!-- content -->
<section id="content">
    <div class="bg-top">
        <div class="bg-top-2">
            <div class="bg">
                <div class="bg-top-shadow">
                    <div class="main">
                        <div id="resultBDD">
                        </div>


                        <div id="resultIMDB">
                            <?php include("resultatsImdb.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_4">
                    <div>EpsIMDB &copy; 2015</div>
                    <!-- {%FOOTER_LINK} -->
                </div>
                <div class="grid_4">
                    <span class="phone-numb">01-23-45-67-89</span>
                </div>
                <div class="grid_4">
                    <ul class="list-services">
                        <li><a href="#"></a></li>
                        <li><a class="item-2" href="#"></a></li>
                        <li><a class="item-3" href="#"></a></li>
                        <li><a class="item-4" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
