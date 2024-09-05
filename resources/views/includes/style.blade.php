<style>
        body {
            margin: 0;
            padding:0; 
        }
        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            transition: all 0.3s;
        }

        #sidebar.active {
            width: 0;
            overflow: hidden;
        }

        #sidebar a {
            padding: 10px 15px;
            font-size: 18px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        #sidebar a:hover {
            background-color: #ddd;
            color: #000;
        }

        #content {
            margin-left: 250px;
           
            transition: all 0.3s;
        }

        #content.active {
            margin-left: 0;
        }

        /* Hamburger button */
        .hamburger {
            cursor: pointer;
            font-size: 30px;
            border: none;
            background: none;
            padding: 10px;
            outline: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            #sidebar {
                width: 0;
                padding-top: 15px;
            }

           

            #sidebar.active {
                width: 250px;
            }

            #content {
                margin-left: 0;
            }

            #content.active {
                margin-left: 250px;
            }
             #sidebar a {
                display: none; /* Sembunyikan tautan pada layar kecil */
            }
             #sidebar.active a {
                display: block; /* Tampilkan tautan saat sidebar aktif */
            }
        }
    </style>