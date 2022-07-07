<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $error['status'] }}</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <style>
              .extraitem { 
				display: flex;
				flex-direction: column;
				-webkit-box-align: center;
				align-items: center;
				width: 100vw;
				height: 100vh;
				padding-top: 50px;
				padding-right: 50px;
				padding-bottom: 80px;			
				background-size: cover;
				background-color: rgb(250, 249, 254);
              	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='1248' height='900' viewBox='0 0 1248 900' fill='none'%3e%3cg clip-path='url(%23clip0)'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M1058.99 714.509L1035.51 738.002L1058.99 761.496L1082.49 738.002L1058.99 714.509ZM1066.05 676.919C1062.15 673.027 1055.84 673.027 1051.95 676.919L997.92 730.955C994.027 734.846 994.027 741.157 997.92 745.05L1051.95 799.079C1055.84 802.974 1062.15 802.974 1066.05 799.079L1120.08 745.05C1123.97 741.157 1123.97 734.846 1120.08 730.955L1066.05 676.919Z' fill='%23343436'/%3e%3cpath d='M1146.35 801.156L1145.99 800.802L1145.64 801.156L1122.16 824.648L1121.8 825.002L1122.16 825.355L1145.64 848.849L1145.99 849.203L1146.35 848.849L1169.84 825.355L1170.2 825.002L1169.84 824.648L1146.35 801.156ZM1139.31 764.272L1139.31 764.272C1142.99 760.576 1148.99 760.576 1152.69 764.272C1152.69 764.272 1152.69 764.272 1152.69 764.272L1206.73 818.308L1206.73 818.308C1210.42 822.005 1210.42 827.999 1206.73 831.697L1207.08 832.05L1206.73 831.697L1152.69 885.726L1153.05 886.079L1152.69 885.726C1148.99 889.425 1142.99 889.424 1139.31 885.726L1139.31 885.726L1085.27 831.697L1084.92 832.05L1085.27 831.697C1081.58 827.999 1081.58 822.005 1085.27 818.308L1085.27 818.308L1139.31 764.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M1146.35 627.156L1145.99 626.802L1145.64 627.156L1122.16 650.648L1121.8 651.002L1122.16 651.355L1145.64 674.849L1145.99 675.203L1146.35 674.849L1169.84 651.355L1170.2 651.002L1169.84 650.648L1146.35 627.156ZM1139.31 590.272L1139.31 590.272C1142.99 586.576 1148.99 586.576 1152.69 590.272C1152.69 590.272 1152.69 590.272 1152.69 590.272L1206.73 644.308L1206.73 644.308C1210.42 648.005 1210.42 653.999 1206.73 657.697L1207.08 658.05L1206.73 657.697L1152.69 711.726L1153.05 712.079L1152.69 711.726C1148.99 715.425 1142.99 715.424 1139.31 711.726L1139.31 711.726L1085.27 657.697L1084.92 658.05L1085.27 657.697C1081.58 653.999 1081.58 648.005 1085.27 644.308L1085.27 644.308L1139.31 590.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M1146.35 279.156L1145.99 278.802L1145.64 279.156L1122.16 302.648L1121.8 303.002L1122.16 303.355L1145.64 326.849L1145.99 327.203L1146.35 326.849L1169.84 303.355L1170.2 303.002L1169.84 302.648L1146.35 279.156ZM1139.31 242.272L1139.31 242.272C1142.99 238.576 1148.99 238.576 1152.69 242.272C1152.69 242.272 1152.69 242.272 1152.69 242.272L1206.73 296.308L1206.73 296.308C1210.42 300.005 1210.42 305.999 1206.73 309.697L1207.08 310.05L1206.73 309.697L1152.69 363.726L1153.05 364.079L1152.69 363.726C1148.99 367.425 1142.99 367.424 1139.31 363.726L1139.31 363.726L1085.27 309.697L1084.92 310.05L1085.27 309.697C1081.58 305.999 1081.58 300.005 1085.27 296.308L1085.27 296.308L1139.31 242.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M971.993 801.509L948.509 825.002L971.993 848.496L995.491 825.002L971.993 801.509ZM979.045 763.919C975.151 760.027 968.835 760.027 964.955 763.919L910.92 817.955C907.027 821.846 907.027 828.157 910.92 832.05L964.955 886.079C968.835 889.974 975.151 889.974 979.045 886.079L1033.08 832.05C1036.97 828.157 1036.97 821.846 1033.08 817.955L979.045 763.919Z' fill='%23FFC200'/%3e%3cpath d='M798.347 801.156L797.993 800.802L797.64 801.156L774.155 824.648L773.802 825.002L774.155 825.355L797.64 848.849L797.993 849.203L798.347 848.849L821.845 825.355L822.198 825.002L821.845 824.648L798.347 801.156ZM791.308 764.272L791.309 764.272C794.994 760.576 800.993 760.576 804.692 764.272C804.692 764.272 804.692 764.272 804.692 764.272L858.726 818.308L858.726 818.308C862.425 822.005 862.425 827.999 858.726 831.697L859.08 832.05L858.726 831.697L804.692 885.726L805.045 886.079L804.692 885.726C800.993 889.425 794.994 889.424 791.309 885.726L791.308 885.726L737.274 831.697L736.92 832.05L737.274 831.697C733.575 827.999 733.575 822.005 737.274 818.308L737.274 818.308L791.308 764.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M798.347 279.156L797.993 278.802L797.64 279.156L774.155 302.648L773.802 303.002L774.155 303.355L797.64 326.849L797.993 327.203L798.347 326.849L821.845 303.355L822.198 303.002L821.845 302.648L798.347 279.156ZM791.308 242.272L791.309 242.272C794.994 238.576 800.993 238.576 804.692 242.272C804.692 242.272 804.692 242.272 804.692 242.272L858.726 296.308L858.726 296.308C862.425 300.005 862.425 305.999 858.726 309.697L859.08 310.05L858.726 309.697L804.692 363.726L805.045 364.079L804.692 363.726C800.993 367.425 794.994 367.424 791.309 363.726L791.308 363.726L737.274 309.697L736.92 310.05L737.274 309.697C733.575 305.999 733.575 300.005 737.274 296.308L737.274 296.308L791.308 242.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M972.347 627.156L971.993 626.802L971.64 627.156L948.155 650.648L947.802 651.002L948.155 651.355L971.64 674.849L971.993 675.203L972.347 674.849L995.845 651.355L996.198 651.002L995.845 650.648L972.347 627.156ZM965.308 590.272L965.309 590.272C968.994 586.576 974.993 586.576 978.692 590.272C978.692 590.272 978.692 590.272 978.692 590.272L1032.73 644.308L1032.73 644.308C1036.42 648.005 1036.42 653.999 1032.73 657.697L1033.08 658.05L1032.73 657.697L978.692 711.726L979.045 712.079L978.692 711.726C974.993 715.425 968.994 715.424 965.309 711.726L965.308 711.726L911.274 657.697L910.92 658.05L911.274 657.697C907.575 653.999 907.575 648.005 911.274 644.308L911.274 644.308L965.308 590.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M1059.35 540.156L1058.99 539.802L1058.64 540.156L1035.16 563.648L1034.8 564.002L1035.16 564.355L1058.64 587.849L1058.99 588.203L1059.35 587.849L1082.84 564.355L1083.2 564.002L1082.84 563.648L1059.35 540.156ZM1052.31 503.272L1052.31 503.272C1055.99 499.576 1061.99 499.576 1065.69 503.272C1065.69 503.272 1065.69 503.272 1065.69 503.272L1119.73 557.308L1119.73 557.308C1123.42 561.005 1123.42 566.999 1119.73 570.697L1120.08 571.05L1119.73 570.697L1065.69 624.726L1066.05 625.079L1065.69 624.726C1061.99 628.425 1055.99 628.424 1052.31 624.726L1052.31 624.726L998.274 570.697L997.92 571.05L998.274 570.697C994.575 566.999 994.575 561.005 998.274 557.308L998.274 557.308L1052.31 503.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M1058.99 366.509L1035.51 390.002L1058.99 413.496L1082.49 390.002L1058.99 366.509ZM1066.05 328.919C1062.15 325.027 1055.84 325.027 1051.95 328.919L997.92 382.955C994.027 386.846 994.027 393.157 997.92 397.05L1051.95 451.079C1055.84 454.974 1062.15 454.974 1066.05 451.079L1120.08 397.05C1123.97 393.157 1123.97 386.846 1120.08 382.955L1066.05 328.919Z' fill='%23FF1D1D'/%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M884.993 540.509L861.509 564.002L884.993 587.496L908.491 564.002L884.993 540.509ZM892.045 502.919C888.151 499.027 881.835 499.027 877.955 502.919L823.92 556.955C820.027 560.846 820.027 567.157 823.92 571.05L877.955 625.079C881.835 628.974 888.151 628.974 892.045 625.079L946.08 571.05C949.974 567.157 949.974 560.846 946.08 556.955L892.045 502.919Z' fill='%23FFC200'/%3e%3cpath d='M1059.35 888.156L1058.99 887.802L1058.64 888.156L1035.16 911.648L1034.8 912.002L1035.16 912.355L1058.64 935.849L1058.99 936.203L1059.35 935.849L1082.84 912.355L1083.2 912.002L1082.84 911.648L1059.35 888.156ZM1052.31 851.272L1052.31 851.272C1055.99 847.576 1061.99 847.576 1065.69 851.272C1065.69 851.272 1065.69 851.272 1065.69 851.272L1119.73 905.308L1119.73 905.308C1123.42 909.005 1123.42 914.999 1119.73 918.697L1120.08 919.05L1119.73 918.697L1065.69 972.726L1066.05 973.079L1065.69 972.726C1061.99 976.425 1055.99 976.424 1052.31 972.726L1052.31 972.726L998.274 918.697L997.92 919.05L998.274 918.697C994.575 914.999 994.575 909.005 998.274 905.308L998.274 905.308L1052.31 851.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M1232.99 714.509L1209.51 738.002L1232.99 761.496L1256.49 738.002L1232.99 714.509ZM1240.05 676.919C1236.15 673.027 1229.84 673.027 1225.95 676.919L1171.92 730.955C1168.03 734.846 1168.03 741.157 1171.92 745.05L1225.95 799.079C1229.84 802.974 1236.15 802.974 1240.05 799.079L1294.08 745.05C1297.97 741.157 1297.97 734.846 1294.08 730.955L1240.05 676.919Z' fill='%23FF1D1D'/%3e%3cpath d='M1233.35 540.156L1232.99 539.802L1232.64 540.156L1209.16 563.648L1208.8 564.002L1209.16 564.355L1232.64 587.849L1232.99 588.203L1233.35 587.849L1256.84 564.355L1257.2 564.002L1256.84 563.648L1233.35 540.156ZM1226.31 503.272L1226.31 503.272C1229.99 499.576 1235.99 499.576 1239.69 503.272C1239.69 503.272 1239.69 503.272 1239.69 503.272L1293.73 557.308L1293.73 557.308C1297.42 561.005 1297.42 566.999 1293.73 570.697L1294.08 571.05L1293.73 570.697L1239.69 624.726L1240.05 625.079L1239.69 624.726C1235.99 628.425 1229.99 628.424 1226.31 624.726L1226.31 624.726L1172.27 570.697L1171.92 571.05L1172.27 570.697C1168.58 566.999 1168.58 561.005 1172.27 557.308L1172.27 557.308L1226.31 503.272Z' fill='white' stroke='%23F0F0F0'/%3e%3cpath d='M1233.35 888.156L1232.99 887.802L1232.64 888.156L1209.16 911.648L1208.8 912.002L1209.16 912.355L1232.64 935.849L1232.99 936.203L1233.35 935.849L1256.84 912.355L1257.2 912.002L1256.84 911.648L1233.35 888.156ZM1226.31 851.272L1226.31 851.272C1229.99 847.576 1235.99 847.576 1239.69 851.272C1239.69 851.272 1239.69 851.272 1239.69 851.272L1293.73 905.308L1293.73 905.308C1297.42 909.005 1297.42 914.999 1293.73 918.697L1294.08 919.05L1293.73 918.697L1239.69 972.726L1240.05 973.079L1239.69 972.726C1235.99 976.425 1229.99 976.424 1226.31 972.726L1226.31 972.726L1172.27 918.697L1171.92 919.05L1172.27 918.697C1168.58 914.999 1168.58 909.005 1172.27 905.308L1172.27 905.308L1226.31 851.272Z' fill='white' stroke='%23F0F0F0'/%3e%3c/g%3e%3cdefs%3e%3cclipPath id='clip0'%3e%3crect width='1248' height='900' fill='white'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e") }
            </style>
    </head>

    <body>
       <div class="flex items-center justify-center w-screen h-screen extraitem">
            <div class="px-36 py-40 bg-white rounded-xl shadow-lg">
                <div class="flex flex-col items-center">
                    <svg class="h-10 w-auto fill-ryan-colorIcon text-ryan-colorHighlight" viewBox="116.557 77.43 159.815 36.244"><path d="M 132.427 106.26 L 128.377 100.41 L 128.137 100.41 L 123.907 100.41 L 123.907 106.26 L 119.047 106.26 L 119.047 85.26 L 128.137 85.26 Q 130.927 85.26 132.982 86.19 Q 135.037 87.12 136.147 88.83 Q 137.257 90.54 137.257 92.88 Q 137.257 95.22 136.132 96.915 Q 135.007 98.61 132.937 99.51 L 137.647 106.26 Z M 132.337 92.88 Q 132.337 91.11 131.197 90.165 Q 130.057 89.22 127.867 89.22 L 123.907 89.22 L 123.907 96.54 L 127.867 96.54 Q 130.057 96.54 131.197 95.58 Q 132.337 94.62 132.337 92.88 Z"></path><path d="M 156.564 98.25 Q 156.564 98.34 156.474 99.51 L 144.264 99.51 Q 144.594 101.01 145.824 101.88 Q 147.054 102.75 148.884 102.75 Q 150.144 102.75 151.119 102.375 Q 152.094 102 152.934 101.19 L 155.424 103.89 Q 153.144 106.5 148.764 106.5 Q 146.034 106.5 143.934 105.435 Q 141.834 104.37 140.694 102.48 Q 139.554 100.59 139.554 98.19 Q 139.554 95.82 140.679 93.915 Q 141.804 92.01 143.769 90.945 Q 145.734 89.88 148.164 89.88 Q 150.534 89.88 152.454 90.9 Q 154.374 91.92 155.469 93.825 Q 156.564 95.73 156.564 98.25 Z M 148.194 93.42 Q 146.604 93.42 145.524 94.32 Q 144.444 95.22 144.204 96.78 L 152.154 96.78 Q 151.914 95.25 150.834 94.335 Q 149.754 93.42 148.194 93.42 Z"></path><path d="M 165.111 106.5 Q 163.101 106.5 161.181 106.005 Q 159.261 105.51 158.121 104.76 L 159.681 101.4 Q 160.761 102.09 162.291 102.525 Q 163.821 102.96 165.291 102.96 Q 168.261 102.96 168.261 101.49 Q 168.261 100.8 167.451 100.5 Q 166.641 100.2 164.961 99.99 Q 162.981 99.69 161.691 99.3 Q 160.401 98.91 159.456 97.92 Q 158.511 96.93 158.511 95.1 Q 158.511 93.57 159.396 92.385 Q 160.281 91.2 161.976 90.54 Q 163.671 89.88 165.981 89.88 Q 167.691 89.88 169.386 90.255 Q 171.081 90.63 172.191 91.29 L 170.631 94.62 Q 168.501 93.42 165.981 93.42 Q 164.481 93.42 163.731 93.84 Q 162.981 94.26 162.981 94.92 Q 162.981 95.67 163.791 95.97 Q 164.601 96.27 166.371 96.54 Q 168.351 96.87 169.611 97.245 Q 170.871 97.62 171.801 98.61 Q 172.731 99.6 172.731 101.37 Q 172.731 102.87 171.831 104.04 Q 170.931 105.21 169.206 105.855 Q 167.481 106.5 165.111 106.5 Z"></path><path d="M 185.147 89.88 Q 187.397 89.88 189.242 90.915 Q 191.087 91.95 192.137 93.825 Q 193.187 95.7 193.187 98.19 Q 193.187 100.68 192.137 102.555 Q 191.087 104.43 189.242 105.465 Q 187.397 106.5 185.147 106.5 Q 182.057 106.5 180.287 104.55 L 180.287 112.08 L 175.607 112.08 L 175.607 90.12 L 180.077 90.12 L 180.077 91.98 Q 181.817 89.88 185.147 89.88 Z M 184.337 102.66 Q 186.137 102.66 187.292 101.445 Q 188.447 100.23 188.447 98.19 Q 188.447 96.15 187.292 94.935 Q 186.137 93.72 184.337 93.72 Q 182.537 93.72 181.382 94.935 Q 180.227 96.15 180.227 98.19 Q 180.227 100.23 181.382 101.445 Q 182.537 102.66 184.337 102.66 Z"></path><path d="M 196.3 90.12 L 200.98 90.12 L 200.98 106.26 L 196.3 106.26 Z M 198.64 87.87 Q 197.35 87.87 196.54 87.12 Q 195.73 86.37 195.73 85.26 Q 195.73 84.15 196.54 83.4 Q 197.35 82.65 198.64 82.65 Q 199.93 82.65 200.74 83.37 Q 201.55 84.09 201.55 85.17 Q 201.55 86.34 200.74 87.105 Q 199.93 87.87 198.64 87.87 Z"></path><path d="M 215.144 89.88 Q 218.144 89.88 219.989 91.68 Q 221.834 93.48 221.834 97.02 L 221.834 106.26 L 217.154 106.26 L 217.154 97.74 Q 217.154 95.82 216.314 94.875 Q 215.474 93.93 213.884 93.93 Q 212.114 93.93 211.064 95.025 Q 210.014 96.12 210.014 98.28 L 210.014 106.26 L 205.334 106.26 L 205.334 90.12 L 209.804 90.12 L 209.804 92.01 Q 210.734 90.99 212.114 90.435 Q 213.494 89.88 215.144 89.88 Z"></path><path d="M 231.488 106.5 Q 229.478 106.5 227.558 106.005 Q 225.638 105.51 224.498 104.76 L 226.058 101.4 Q 227.138 102.09 228.668 102.525 Q 230.198 102.96 231.668 102.96 Q 234.638 102.96 234.638 101.49 Q 234.638 100.8 233.828 100.5 Q 233.018 100.2 231.338 99.99 Q 229.358 99.69 228.068 99.3 Q 226.778 98.91 225.833 97.92 Q 224.888 96.93 224.888 95.1 Q 224.888 93.57 225.773 92.385 Q 226.658 91.2 228.353 90.54 Q 230.048 89.88 232.358 89.88 Q 234.068 89.88 235.763 90.255 Q 237.458 90.63 238.568 91.29 L 237.008 94.62 Q 234.878 93.42 232.358 93.42 Q 230.858 93.42 230.108 93.84 Q 229.358 94.26 229.358 94.92 Q 229.358 95.67 230.168 95.97 Q 230.978 96.27 232.748 96.54 Q 234.728 96.87 235.988 97.245 Q 237.248 97.62 238.178 98.61 Q 239.108 99.6 239.108 101.37 Q 239.108 102.87 238.208 104.04 Q 237.308 105.21 235.583 105.855 Q 233.858 106.5 231.488 106.5 Z"></path><path d="M 243.754 106.5 Q 242.524 106.5 241.684 105.66 Q 240.844 104.82 240.844 103.56 Q 240.844 102.27 241.684 101.475 Q 242.524 100.68 243.754 100.68 Q 244.984 100.68 245.824 101.475 Q 246.664 102.27 246.664 103.56 Q 246.664 104.82 245.824 105.66 Q 244.984 106.5 243.754 106.5 Z"></path><path d="M 249.83 90.12 L 254.51 90.12 L 254.51 106.26 L 249.83 106.26 Z M 252.17 87.87 Q 250.88 87.87 250.07 87.12 Q 249.26 86.37 249.26 85.26 Q 249.26 84.15 250.07 83.4 Q 250.88 82.65 252.17 82.65 Q 253.46 82.65 254.27 83.37 Q 255.08 84.09 255.08 85.17 Q 255.08 86.34 254.27 87.105 Q 253.46 87.87 252.17 87.87 Z"></path><path d="M 266.544 106.5 Q 263.994 106.5 261.969 105.435 Q 259.944 104.37 258.804 102.48 Q 257.664 100.59 257.664 98.19 Q 257.664 95.79 258.804 93.9 Q 259.944 92.01 261.969 90.945 Q 263.994 89.88 266.544 89.88 Q 269.094 89.88 271.104 90.945 Q 273.114 92.01 274.254 93.9 Q 275.394 95.79 275.394 98.19 Q 275.394 100.59 274.254 102.48 Q 273.114 104.37 271.104 105.435 Q 269.094 106.5 266.544 106.5 Z M 266.544 102.66 Q 268.344 102.66 269.499 101.445 Q 270.654 100.23 270.654 98.19 Q 270.654 96.15 269.499 94.935 Q 268.344 93.72 266.544 93.72 Q 264.744 93.72 263.574 94.935 Q 262.404 96.15 262.404 98.19 Q 262.404 100.23 263.574 101.445 Q 264.744 102.66 266.544 102.66 Z"></path></svg>
                    <p class="mb-2 mt-3 text-center text-gray-500 md:text-xl">
					<b>{{ $error['status'] }}</b>
                    <hr>
					@php
						if($error['message'] !== NULL) {
							echo $error['message'];
						} else {
							echo 'Oops, something weird happened.';
						}
      				@endphp
                    </p>
                </div>

            </div>

        </div>



    </body>

</html>   