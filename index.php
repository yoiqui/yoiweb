<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href=""> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <style>
        /* CSS Variables and Base Styles */
        :root {
            /* Colors */
            --text-color: #000000;
            --bg-color: #fffefe;

            /* Font and typography */
            --body-font: "Noto Sans Thai", sans-serif;
            --normal-font-size: 0.938rem;
        }

        @media screen and (min-width: 968px) {
            :root {
                --normal-font-size: 1rem;
            }
        }

        /* Base Styles */
        *,
        *:after,
        *:before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-size: var(--normal-font-size);
            background-color: var(--bg-color);
            color: var(--text-color);
            font-weight: 400;
            font-family: var(--body-font);
            transition: all 0.2s ease;
        }

        .text-dark {
            color: #000000 !important;
        }

        /* Styling for .nav-pills */
        .nav-pills .nav-link {
            border-radius: 0.25rem;
            transition: background-color 0.3s ease !important;
        }

        .nav-pills .nav-link.active {
            background-color: #f5f57e !important;
            color: white;
        }

        .nav-pills .nav-link:hover {
            background-color: #f1f1a6 !important;
            color: rgb(0, 0, 0);
        }
    </style>

    <style>
        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: auto;
            /* กำหนดให้ขนาดเป็นอัตโนมัติ */
            min-width: 50%;
            /* กำหนดขนาดขั้นต่ำ */
            max-width: 90%;
            /* กำหนดขนาดสูงสุด */
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
            outline: 0;
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-dialog {
            max-width: 50%;
            /* กำหนดขนาดสูงสุดของ modal dialog */
            margin: 1.75rem auto;
            /* กำหนด margin ด้านบนและล่าง */
        }
    </style>

</head>

<body>
    <section class="container">
        <section class="card__container ">

            <!--***************************soil*****************************-->
            <div class="card__bx" style="--clr: #704F4F">
                <div class="card__data">
                    <div class="card__icon">
                        <img src="img/watering-plants.png" style="width: 50px; height:auto;">
                    </div>
                    <div class="card__content">
                        <h3>ความชื้นในดิน</h3>
                        <p>ความชื้นในดินคืออะไร?</p>

                        <!-- ลิงค์ Read More -->
                        <a  data-bs-toggle="modal" data-bs-target="#soilModal">อ่านเพิ่มเติม</a>

                        <!-- Modal ph -->
                        <div class="modal fade" id="soilModal" tabindex="-1" aria-labelledby="soilModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="soilModalLabel">ความชื้นในดินคืออะไร?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills mb-3 text-dark" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="pills-soil-tab" data-bs-toggle="pill" data-bs-target="#pills-soil" type="button" role="tab" aria-controls="pills-soil" aria-selected="true"><i class="bi bi-chat-text-fill me-2"></i>ความชื้นในดินคืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-soil1-tab" data-bs-toggle="pill" data-bs-target="#pills-soil1" type="button" role="tab" aria-controls="pills-soil1" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ความสำคัญของความชื้นในดินคืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-soil2-tab" data-bs-toggle="pill" data-bs-target="#pills-soil2" type="button" role="tab" aria-controls="pills-soil2" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ระดับความชื้นในดิน</button>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content" id="pills-tabContent" style="text-align: left;">
                                            <div class="tab-pane fade show active" id="pills-soil" role="tabpanel" aria-labelledby="pills-soil-tab">
                                                <p class="text-dark">
                                                    ความชื้นในดิน (Soil Moisture) มีความหมายที่แตกต่างกันในแต่ละความคิดคน
                                                    ตัวอย่างเช่นแนวคิดของเกษตรกรเกี่ยวกับ ความชื้น ในดินจะแตกต่างจากผู้จัดการทรัพยากรน้ำหรือนักพยากรณ์อากาศ
                                                    อย่างไรก็ตามโดยทั่วไปความชื้นในดินคือน้ำที่กักเก็บไว้ในช่องว่างระหว่างอนุภาคของดิน ความชื้นในดินคือน้ำที่อยู่ในชั้นบนของดิน 10 เซนติเมตร
                                                    ในขณะที่ความชื้นในดินบริเวณรากคือน้ำที่มีอยู่ในพืช ซึ่งโดยทั่วไปจะอยู่ในดินชั้นบน 200 เซนติเมตร
                                                </p>
                                                <hr>
                                                แหล่งที่มา:
                                                <p class="text-dark" href="https://www.ponpe.com/tech/726-soil-moisture.html">https://www.ponpe.com</p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-soil1" role="tabpanel" aria-labelledby="pills-soil1-tab">
                                                <p class="text-dark">
                                                    ปริมาณความชื้นหรือน้ำในดินเป็นสิ่งสำคัญที่ต้องรู้เนื่องจาก:
                                                    <br>
                                                    • น้ำในดินทำหน้าที่เป็นตัวทำละลายและเป็นพาหะของสารอาหารเพื่อการเจริญเติบโตของพืช<br>
                                                    • ผลผลิตของพืชมักขึ้นอยู่กับปริมาณน้ำที่มีมากกว่าสารอาหารอื่น ๆ<br>
                                                    • น้ำในดินทำหน้าที่เป็นสารอาหารด้วยตัวมันเอง<br>
                                                    • น้ำในดินทำหน้าที่ควบคุมอุณหภูมิของดิน<br>
                                                    • กระบวนการขึ้นรูปของดินและการผุกร่อนขึ้นอยู่กับน้ำ<br>
                                                    • จุลินทรีย์ต้องการน้ำสำหรับทำกระบวนการเมทาบอลิซึม (metabolism)<br>
                                                    • น้ำในดินช่วยในการทำปฏิกิริยาเคมีและชีวภาพของดิน<br>
                                                    • น้ำในดินเป็นองค์ประกอบหลักในการเติบโตของพืช<br>
                                                    • น้ำจำเป็นต่อการสังเคราะห์แสง<br>
                                                </p>
                                                <hr>
                                                แหล่งที่มา:
                                                <p class="text-dark" href="https://www.ponpe.com/tech/726-soil-moisture.html">https://www.ponpe.com</p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-soil2" role="tabpanel" aria-labelledby="pills-soil2-tab">
                                                <p class="text-dark">
                                                    ปริมาณความชื้นที่เหมาะสม (MC%) ของดินอาจแตกต่างกันไปขึ้นอยู่กับปัจจัยต่างๆ เช่นชนิดของดิน ภูมิอากาศ และความต้องการเฉพาะของพืชผล
                                                    ด้านล่างนี้เป็นข้อมูลทั่วไปที่แสดงช่วงความชื้นที่เหมาะสมโดยประมาณ พืชที่ระบุไว้แสดงถึงสายพันธุ์ที่พบได้ทั่วไป
                                                    <br><br>
                                                    • ดอกไม้ ต้นไม้ และไม้พุ่มส่วนใหญ่ต้องการระดับความชื้นระหว่าง <span class="text-success">21% – 40%</span><br>
                                                    • ผักทั้งหมดต้องการความชื้นของดินระหว่าง <span class="text-success">41% - 80%</span><br>
                                                    • เมล่อนต้องการความชื้นของดินระหว่าง <span class="text-success">80% - 99%</span><br>
                                                </p>
                                                <hr>
                                                แหล่งที่มา:
                                                <p class="text-dark" href="https://www.neonics.co.th/moisture-and-humidity/soil-moisture.html">https://www.neonics.co.th</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--****************************temp****************************-->
            <div class="card__bx" style="--clr: #E08E6D">
                <div class="card__data">
                    <div class="card__icon">
                        <img src="img/weather (1).png" style="width: 50px; height:auto;">
                    </div>
                    <div class="card__content">
                        <h3>อุณหภูมิ</h3>
                        <p>อุณหภูมิคืออะไร?</p>
                        <!-- ลิงค์ Read More -->
                        <a  data-bs-toggle="modal" data-bs-target="#tempModal">อ่านเพิ่มเติม</a>

                        <!-- Modal ph -->
                        <div class="modal fade" id="tempModal" tabindex="-1" aria-labelledby="tempModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tempModalLabel">ความชื้นในดินคืออะไร?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills mb-3 text-dark" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="temperature-tab" data-bs-toggle="pill" data-bs-target="#temperature" type="button" role="tab" aria-controls="temperature" aria-selected="true"><i class="bi bi-chat-text-fill me-2"></i>อุณหภูมิคืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="temp-important-tab" data-bs-toggle="pill" data-bs-target="#temp-important" type="button" role="tab" aria-controls="temp-important" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>อุณหภูมิที่เหมาะสมกับการปลูกพืช</button>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content" id="pills-tabContent" style="text-align: left;">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active text-dark" id="temperature" role="tabpanel" aria-labelledby="temperature-tab">
                                                    <p class="text-dark">> อุณหภูมิอากาศ : ในการเจริญเติบโตชองพืช จะหยุดชะงัก ก็ต่อเมื่อพืชนั้นได้รับอุณหภูมิอากาศที่สูงหรือต่ำเกินไป พืชนั้นจะเจริญเติบโตอย่างรวดเร็วก็ต่อเมื่อพืชนั้นได้รับอุณหภูมิที่เหมาะสม<br>
                                                        > อุณหภูมิภายในดิน : นั้นมีอิทธิผลต่อการงอกงามของเมล็ดและราก การดูดซึมซับน้ำ ธาตุอาหารต่างๆภายในดิน การเปลื่ยนแปลงอุณหภูมิในดินขึ้นอยู่กับรังสีของพระอาทิตย์ อุณหภูมิภายในดินนั้นต้องพอเหมาะกับพืชแต่ละชนิด <br>
                                                        การปรับระดับอุณหภูมิในดินนั้นเป็นสิ่งจำเป็น เพื่อให้พืชมีการเจริญเติบโตที่ดีและแข็งแรงต่อการเพาะปลูก เช่น มีการปลูกพืชปกคลุมผิวหน้าดินนั้นเอง หรือ ปริมาณน้ำในดิน<br>



                                                        <br><br><br><br><br><br>
                                                        <hr>
                                                        แหล่งที่มา: <p class="text-dark" href="https://legatool.com/wp/10911/">https://legatool.com/wp/10911/</p>
                                                    </p>

                                                </div>
                                                <div class="tab-pane fade text-dark" id="temp-important" role="tabpanel" aria-labelledby="temp-important-tab">
                                                    <p class="text-dark"> อากาศ: อุณหภูมิอากาศที่ทำให้พืชพันธุ์นั้นสามารถเจริญเติบโตได้อย่างรวดเร็ว อยู่รอด และแข็งแรง อยู่ที่ ประมาณ 15 – 40 องศาเซลเซียส<br>
                                                        > ดิน: อุณหภูมิภายในดินมีความสำคัญต่อการงอกงามของเมล็ดและราก การเคลื่ยนย้ายสารอาหารภายในลำต้นของพืช นั้น อยู่ในอุณหภูมิที่ 20 – 30 องศาเซลเซียส <br>


                                                        <br><br><br><br><br><br>
                                                        <hr>
                                                        แหล่งที่มา: <p class="text-dark" href="https://legatool.com/wp/10911/">https://legatool.com/wp/10911/</p>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--**************************humi*******************************-->
            <div class="card__bx" style="--clr: #61A3BA">
                <div class="card__data">
                    <div class="card__icon">
                        <img src="img/thermometer.png" style="width: 50px; height:auto;">
                    </div>
                    <div class="card__content">
                        <h3>ความชื้นสัมพัทธ์</h3>
                        <p>ความชื้นสัมพัทธ์คืออะไร?</p>

                        <!-- ลิงค์ Read More -->
                        <a  data-bs-toggle="modal" data-bs-target="#humiModal">อ่านเพิ่มเติม</a>

                        <!-- Modal ph -->
                        <div class="modal fade" id="humiModal" tabindex="-1" aria-labelledby="humiModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="humiModalLabel">ความชื้นสัมพัทธ์ คืออะไร?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills mb-3 text-dark" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="pills-humi-tab" data-bs-toggle="pill" data-bs-target="#pills-humi" type="button" role="tab" aria-controls="pills-humi" aria-selected="true"><i class="bi bi-chat-text-fill me-2"></i>ความชื้นสัมพัทธ์คืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-humi1-tab" data-bs-toggle="pill" data-bs-target="#pills-humi1" type="button" role="tab" aria-controls="pills-humi1" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ความชื้นและอุณหภูมิที่เหมาะสมของพืชแต่ละชนิด</button>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content" id="pills-tabContent" style="text-align: left;">
                                            <div class="tab-pane fade show active text-dark" id="pills-humi" role="tabpanel" aria-labelledby="pills-humi-tab">
                                                <p class="text-dark">ความชื้น (Humidity) หรือเรียกว่าปริมาณไอน้ำในอากาศ ซึ่งเกิดจากสารผสมระหว่างไอน้ำกับองค์ประกอบอื่นในอากาศ อาจเกิดจากกระบวนการระเหยของแหล่งน้ำต่างๆ เช่น ทะเล มหาสมุทร เมื่อได้รับความร้อนจากแสงอาทิตย์ก็จะระเหยกลายเป็นไอน้ำลอยสู่ชั้นบรรยากาศ หรือเกิดจากกระบวนการคายน้ำของพืช <br>
                                                    รวมถึงกิจกรรมทางน้ำที่เกิดจากมนุษย์ โดยนิยามในแง่ของปริมาณน้ำในสารผสมนี้ว่า “ความชื้นสัมบูรณ์” ในชีวิตประจำวันเรา คำว่า “ความชื้นในอากาศ” มักหมายถึง ความชื้นสัมพัทธ์มากกว่า โดยแสดงผลเป็นร้อยละหรือเปอร์เซ็นต์ในการทำนายสภาพอากาศ<br>
                                                    <br><br>
                                                    ความชื้นและอุณหภูมิมีผลต่อการเจริญเติบโตและการออกดอกของพืช โดยเฉพาะอย่างยิ่งในช่วงที่พืชกำลังเจริญเติบโตอย่างต่อเนื่อง เมื่อมีอุณหภูมิและความชื้นที่เหมาะสมพอควร พืชจะเจริญเติบโตดีและสมบูรณ์ ส่วนเมื่อมีอุณหภูมิหรือความชื้นมากหรือน้อยเกินไป จะส่งผลต่อพืชได้ดังนี้<br>
                                                    > ความชื้นสูงเกินไป : การมีความชื้นสูงเกินไปอาจทำให้พืชเจริญเติบโตช้าลง และเป็นที่อยู่อาศัยของเชื้อราและแมลง<br>
                                                    > ความชื้นต่ำเกินไป : การมีความชื้นต่ำเกินไปอาจทำให้พืชแห้ง ทำให้พืชชะงักการเจริญเติบโต<br>
                                                    > อุณหภูมิสูงเกินไป : การมีอุณหภูมิสูงเกินไปอาจทำให้พืชแห้งและไหม้ และยังส่งผลต่อการสังเคราะห์แสงของพืช โดยอุณหภูมิสูงจะทำให้การสังเคราะห์แสงชะงัก ส่งผลให้การเจริญเติบโตช้าลง<br>
                                                    > อุณหภูมิต่ำเกินไป : การมีอุณหภูมิต่ำเกินไปอาจทำให้พืชชะงักการเจริญเติบโต และยังส่งผลต่อการสังเคราะห์แสงของพืชเช่นเดียวกับอุณหภูมิสูง เนื่องจากพืชต้องการอุณหภูมิเหมาะสมเพื่อสังเคราะห์แสงและเจริญเติบโต<br>
                                                    <br><br><br><br>
                                                    <hr>
                                                    แหล่งที่มา: <p class="text-dark" href="https://www.hannathailand.com/2022/02/10/ความชื้นในอากาศ-สำคัญอ/">https://www.hannathailand.com/2022/02/10/ความชื้นในอากาศ-สำคัญอ/</p>
                                                    <br>แหล่งที่มา: <p class="text-dark" href="https://www.zolftech.com/18080079/อุณหภูมิและความชื้นมีผลอย่างไรกับพืช">https://www.zolftech.com/18080079/อุณหภูมิและความชื้นมีผลอย่างไรกับพืช</p>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade text-dark" id="pills-humi1" role="tabpanel" aria-labelledby="pills-humi1-tab">
                                                <p class="text-dark">ความชื้นและอุณหภูมิที่เหมาะสมของพืชแต่ละชนิด <br>
                                                    > อุณหภูมิและความชื้นที่เหมาะสมสำหรับการปลูกพืชจะแตกต่างกันไปตามชนิดของพืช ซึ่งจะแบ่งเป็น 3 ประเภทคือ<br>
                                                    > พืชที่ต้องการความชื้นและอุณหภูมิสูง: อุณหภูมิระหว่าง 25-30 องศาเซลเซียส และความชื้นระหว่าง 60-80% เช่น พริก, มะเขือเทศ, มะเขือยาว, แตงกวา,หน่อไม้ฝรั่ง เป็นต้น<br>
                                                    > พืชที่ต้องการอุณหภูมิปานกลาง: อุณหภูมิระหว่าง 20-25 องศาเซลเซียส และความชื้นระหว่าง 50-70% มีต้นกล้าและผักใบเขียวต่างๆ เช่น ผักกาด, ผักกวางตุ้ง, กะหล่ำปลี, คะน้า, ผักบุ้งจีน, ผักชีฝรั่ง, ผักสลัด เป็นต้น<br>
                                                    > พืชที่ต้องการอุณหภูมิต่ำ: อุณหภูมิระหว่าง 15-20 องศาเซลเซียส และความชื้นระหว่าง 60-80% เช่น สตรอเบอร์รี่, องุ่น, แอปเปิ้ล, กล้วยไม้ เป็นต้น<br>
                                                    <br><br><br><br>
                                                    <hr>
                                                    แหล่งที่มา: <p class="text-dark" href="https://www.hannathailand.com/2022/02/10/ความชื้นในอากาศ-สำคัญอ/">https://www.hannathailand.com/2022/02/10/ความชื้นในอากาศ-สำคัญอ/</p>
                                                    <br>แหล่งที่มา: <p class="text-dark" href="https://www.zolftech.com/18080079/อุณหภูมิและความชื้นมีผลอย่างไรกับพืช">https://www.zolftech.com/18080079/อุณหภูมิและความชื้นมีผลอย่างไรกับพืช</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--**************************npk**********************************-->
            <div class="card__bx" style="--clr: #6C946F">
                <div class="card__data">
                    <div class="card__icon">
                        <img src="img/npk.png" style="width: 50px; height:auto;">
                    </div>
                    <div class="card__content ">
                        <h3>ธาตุสารอาหารในดิน</h3>
                        <p>ธาตุสารอาหารในดินคืออะไร?</p>

                        <!-- ลิงค์ Read More -->
                        <a  data-bs-toggle="modal" data-bs-target="#npkModal">อ่านเพิ่มเติม</a>

                        <!-- Modal NPK -->
                        <div class="modal fade" id="npkModal" tabindex="-1" aria-labelledby="npkModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color:black;" id="npkModalLabel">ธาตุสารอาหารในดินคืออะไร?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="color:black;">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="pills-npk-tab" data-bs-toggle="pill" data-bs-target="#pills-npk" type="button" role="tab" aria-controls="pills-npk" aria-selected="true"><i class="bi bi-chat-text-fill me-2"></i>NPK คืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-n-tab" data-bs-toggle="pill" data-bs-target="#pills-n" type="button" role="tab" aria-controls="pills-n" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ไนโตรเจน (N)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-p-tab" data-bs-toggle="pill" data-bs-target="#pills-p" type="button" role="tab" aria-controls="pills-p" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ฟอสฟอรัส (P)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-k-tab" data-bs-toggle="pill" data-bs-target="#pills-k" type="button" role="tab" aria-controls="pills-k" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>โพแทสเซียม (K)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-criterion-tab" data-bs-toggle="pill" data-bs-target="#pills-criterion" type="button" role="tab" aria-controls="pills-criterion" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ประโยชน์ของธาตุอาหารหลักของพืช</button>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content" id="pills-tabContent" style="text-align:left;">
                                            <div class="tab-pane fade show active" id="pills-npk" role="tabpanel" aria-labelledby="pills-npk-tab">
                                                <a class="text-dark">NPK</a> คือ ปุ๋ยหรือธาตุอาหารหลักของพืชที่ประกอบไปด้วยธาตุ 3 ชนิด N ไนโตรเจน ( Nitrogen ) P ฟอสฟอรัส ( Phosphorus )
                                                และ K โพแทสเซียม ( Potassium ) โดยธาตุแต่ละชนิดนั้นมีหน้าที่ในการบำรุงพืชแตกต่างกัน

                                                <div class="container-fluid pt-4 px-4 ">
                                                    <div class="p-2" style="text-align: center;">
                                                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                                                            <img src="img/npk.png" alt="" style="width: 100px; height: 100px;">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.kingpandurian.com/ปุ๋ย-npk-คืออะไร-ธาตุอาหารห/">https://www.kingpandurian.com</p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-n" role="tabpanel" aria-labelledby="pills-n-tab">
                                                <a class="text-dark">N ไนโตรเจน ( Nitrogen )</a> คือ ธาตุอาหารของพืชที่เป็นองค์ประกอบหลักของเซลล์พืช
                                                และพบว่า พืชส่วนใหญ่ขาดธาตุอาหารหลักชนิดนี้เป็นอย่างมาก เพราะมักเกิดการชะล้างหรือสูญเสียจากการระเหยได้ง่าย
                                                โดยมีหน้าที่ในการสร้างเสริม ซ่อมแซม และสังเคราะห์แสง N ไนโตรเจน ( Nitrogen ) ช่วยการส่งเสริมโปรตีนในพืช ทำให้พืชสามารถเจริญเติบโตได้ดี
                                                โดยเฉพาะกิ่งและใบของพืชต่างๆ ซึ่งหากไม่ได้รับแร่ธาตุนี้ก็จะทำให้พืชไม่เจริญเติบโต และใบมีสีเหลืองเนื่องจากขาดสาร คลอโรฟิลล์ ( Chlorophyll )

                                                <div class="container-fluid pt-4 px-4 ">
                                                    <div class="p-2" style="text-align: center;">
                                                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                                                            <img src="img/nitrogen.png" alt="" style="width: 100px; height: 100px;">
                                                            <h3 class="text-dark m-2">ไนโตรเจน (N)</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.kingpandurian.com/ปุ๋ย-npk-คืออะไร-ธาตุอาหารห/">https://www.kingpandurian.com</p>

                                            </div>
                                            <div class="tab-pane fade" id="pills-p" role="tabpanel" aria-labelledby="pills-p-tab">
                                                <a class="text-dark">P ฟอสฟอรัส ( Phosphorus )</a> คือ แร่ธาตุที่ละลายไปกับน้ำได้ค่อนข้างยาก
                                                โดยมีการดูดซีมไปใช้ของพืชขึ้นอยู่กับความเป็นกรดหรือด่างของดิน โดยจะช่วยให้รากสามารถดูดซึมไปใช้ได้มากที่สุด
                                                ส่งผลให้ลำต้นมีความแข็งแรง ทำให้เซลล์เนื้อเยื่อเจริญเติบโตแล้วยังจะกระตุ้นให้เกิดดอกได้ดี
                                                และหากขาดแร่ธาตุชนิดนี้ไปจะทำให้รากเกิดการเปลี่ยนสีเป็นสีเหลือง และไม่เจริญเติบโต รวมทั้งลำต้นไม่แข็งแรง

                                                <div class="container-fluid pt-4 px-4 ">
                                                    <div class="p-2" style="text-align: center;">
                                                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                                                            <img src="img/phosphorus.png" alt="" style="width: 100px; height: 100px;">
                                                            <h3 class="text-dark m-2">ฟอสฟอรัส (P)</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.kingpandurian.com/ปุ๋ย-npk-คืออะไร-ธาตุอาหารห/">https://www.kingpandurian.com</p>

                                            </div>
                                            <div class="tab-pane fade" id="pills-k" role="tabpanel" aria-labelledby="pills-k-tab">
                                                <a class="text-dark">K โพแทสเซียม ( Potassium )</a> คือ แร่ธาตุที่สามารถละลายน้ำได้ดี
                                                จะคอยทำหน้าที่ในการสังเคราะห์แสง คอยลำเลียงอาหารไปเลี้ยงเซลล์ต่างๆ ในพืช ทำให้พืชสามารถต้านทานโรคบางชนิดได้ดี
                                                ทำให้ต้นแข็งแรงและมีคุณภาพ ซึ่งหากขาดธาตุอาหารนี้ไปจะทำให้ใบเกิดเป็นจุดและแห้งตายได้

                                                <div class="container-fluid pt-4 px-4 ">
                                                    <div class="p-2" style="text-align: center;">
                                                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                                                            <img src="img/potassium.png" alt="" style="width: 100px; height: 100px;">
                                                            <h3 class="text-dark m-2">โพแทสเซียม (K)</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.kingpandurian.com/ปุ๋ย-npk-คืออะไร-ธาตุอาหารห/">https://www.kingpandurian.com</p>

                                            </div>
                                            <div class="tab-pane fade" id="pills-criterion" role="tabpanel" aria-labelledby="pills-criterion-tab">
                                                <div class="col-sm-12">
                                                    <div class="bg-white rounded h-100 p-4">
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">

                                                            <div class="accordion-item bg-transparent">
                                                                <h2 class="accordion-header" id="flush-headingOne">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                                                        <a class="text-success">ไนโตรเจน (N)</a>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body ">
                                                                        <h6 class="text-dark">N ไนโตรเจน ช่วยในเรื่อง</h6>
                                                                        <p class="text-dark">– ใบ : สังเคราะห์แสงสร้างคลอโรฟิลล์ ช่วยให้ใบพืชมีสีเขียว</p>
                                                                        <p class="text-dark">– ลำต้น : ช่วยทำให้พืชตั้งตัวได้เร็วในระยะแรกของการเจริญเติบโตอย่างแข็งแรงสมบูรณ์</p>
                                                                        <br>
                                                                        <h6 class="text-dark">หากพืชขาดธาตุอาหาร N ไนโตรเจน พืชจะเป็นอย่างไร?</h6>
                                                                        <p class="text-dark">– ใบของพืช : จะแสดงอาการใบเหลือง ใบมีขนาดเล็กลง ลำต้นจะแคระแกร็น ส่งผลทำให้ได้ผลผลิตต่ำ </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item bg-transparent">
                                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                        <a class="text-info">ฟอสฟอรัส (P)</a>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">
                                                                        <h6 class="text-dark">P ฟอสฟอรัส ช่วยในเรื่อง</h6>
                                                                        <p class="text-dark">– ดอก : เร่งการออกผล สร้างเมล็ด ช่วยการออกดอก ผสมเกสร</p>
                                                                        <p class="text-dark">– ราก : ดูดธาตุอาหารไปใช้ได้ดี ช่วยให้รากใหญ่ แข็งแรง กระจายตัวดี</p>
                                                                        <br>
                                                                        <h6 class="text-dark">หากพืชขาดธาตุอาหาร P ฟอสฟอรัส พืชจะเป็นอย่างไร?</h6>
                                                                        <p class="text-dark">– ลำต้นจะแคระแกร็น ไม่ผลิดอก ส่งผลทำให้ได้ผลผลิตต่ำ ระบบรากไม่เจริญเติบโต</p>
                                                                        <p class="text-dark">– ใบแก่จะเปลี่ยนสีจากสีเขียวเป็นสีม่วงแล้วกลายเป็นสีน้ำตาล หลุดร่วงหมด</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item bg-transparent">
                                                                <h2 class="accordion-header" id="flush-headingThree">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                        <a class="text-warning">โพแทสเซียม (K)</a>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">
                                                                        <h6 class="text-dark">K โพแทสเซียม ช่วยในเรื่อง</h6>
                                                                        <p class="text-dark">– ผล : ผลใหญ่ขึ้น รสชาติหวานขึ้น สีสวยสด เนื้อของผลมีคุณภาพ เพราะจะช่วยสร้างแป้ง น้ำตาล โปรตีน</p>
                                                                        <br>
                                                                        <h6 class="text-dark">หากพืชขาดธาตุอาหาร K โพแทสเซียม จะเป็นอย่างไร?</h6>
                                                                        <p class="text-dark">– ใบ : เกิดรอยไหม้ตามขอบใบและใบเหลือง</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.kingpandurian.com/ปุ๋ย-npk-คืออะไร-ธาตุอาหารห/">https://www.kingpandurian.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--***************************ph******************************-->
            <div class="card__bx" style="--clr: #C68484">
                <div class="card__data">
                    <div class="card__icon">
                        <img src="img/ph.png" style="width: 50px; height:auto;">
                    </div>
                    <div class="card__content ">
                        <h3>ค่ากรด-ด่าง</h3>
                        <p>ค่ากรด-ด่างคืออะไร?</p>

                        <!-- ลิงค์ Read More -->
                        <a  data-bs-toggle="modal" data-bs-target="#phModal">อ่านเพิ่มเติม</a>

                        <!-- Modal ph -->
                        <div class="modal fade" id="phModal" tabindex="-1" aria-labelledby="phModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="phModalLabel">ค่ากรด-ด่างคืออะไร?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="pills-soil-tab" data-bs-toggle="pill" data-bs-target="#pills-soil" type="button" role="tab" aria-controls="pills-soil" aria-selected="true"><i class="bi bi-chat-text-fill me-2"></i>pHคืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-important-tab" data-bs-toggle="pill" data-bs-target="#pills-important" type="button" role="tab" aria-controls="pills-important" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ความสำคัญของค่ากรด-ด่างคืออะไร?</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="pills-moisture-tab" data-bs-toggle="pill" data-bs-target="#pills-moisture" type="button" role="tab" aria-controls="pills-moisture" aria-selected="false"><i class="bi bi-chat-text-fill me-2"></i>ระดับค่ากรด-ด่าง</button>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content" id="pills-tabContent" style="text-align:left;">
                                            <div class="tab-pane fade show active text-dark" id="pills-soil" role="tabpanel" aria-labelledby="pills-soil-tab">
                                                <p class="text-dark">ค่า pH คือการวัดความเข้มข้นของไฮโดรเจนไอออนซึ่งเป็นการวัดความป็นกรด-ด่างหรือเบสของสารละลาย ของเหลวหรือน้ำ โดยที่ระดับพีเอช มักจะอยู่ในช่วง 0 ถึง 14
                                                    โดยของเหลวที่มีค่าพีเอช น้อยกว่า 7 จะมีสภาพเป็นกรด ของเหลวหรือน้ำที่มีค่าพีเอช มากกว่า 7 จะเป็นด่างหรือเบส ส่วนระดับค่าพีเอช ที่ 7.0 หมายถึง “เป็นกลาง”
                                                    โดยมีความเป็นไปได้ถ้าของเหลวมีความเป็นกรดรุนแรงจะมีค่าพีเอช ที่ต่ำกว่า 0 และถ้าของเหลวมีความเป็นด่างสูงจะมีค่าพีเอช ที่มากกว่า 14
                                                </p>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.neonics.co.th/ph/what-is-ph-and-measurement.html">https://www.neonics.co.th/ph/what-is-ph-and-measurement.html</p>
                                            </div>
                                            <div class="tab-pane fade text-dark" id="pills-important" role="tabpanel" aria-labelledby="pills-important-tab">
                                                <p class="text-dark">ค่า pH ของน้ำเป็นตัวกำหนดความสามารถในการละลาย (ปริมาณสารที่สามารถละลายได้ในน้ำ) เช่นน้ำที่มีค่าพีเอช ต่ำ (เป็นกรด) นั่นหมายความว่าน้ำนั้นมีแนวโน้มที่จะมีธาตุโลหะหนักและสารอื่นๆ ละลายอยู่เช่นเหล็ก ทองแดง และอื่นๆ และค่าพีเอช ยังแสดงถึงความสามารถในการดำรงชีพของสัตว์น้ำ<br>
                                                    pH เป็นปริมาณที่สำคัญที่สะท้อนถึงสภาพทางเคมีของสารละลาย ค่าพีเอช สามารถควบคุมความพร้อมใช้งานของสารอาหารหน้าที่ทางชีวภาพกิจกรรมของจุลินทรีย์และพฤติกรรมของสารเคมี ด้วยเหตุนี้การตรวจสอบหรือควบคุมค่าพีเอช ของดินน้ำและผลิตภัณฑ์อาหารหรือเครื่องดื่มจึงมีความสำคัญสำหรับการใช้งานที่หลากหลาย<br>
                                                </p>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.neonics.co.th/ph/what-is-ph-and-measurement.html">https://www.neonics.co.th/ph/what-is-ph-and-measurement.html</p>
                                            </div>
                                            <div class="tab-pane fade text-dark" id="pills-moisture" role="tabpanel" aria-labelledby="pills-moisture-tab">
                                                <p class="text-dark">(1) pH มีค่า 7 หมายความว่ามีความเป็นกลาง (natural pH)<br>
                                                    (2) pH มีค่าต่ำกว่า 7 แสดงความเป็นกรด (acidic pH)<br>
                                                    (3) pH มีค่าสูงกว่า 7 แสดงความเป็นเบสหรือด่าง (alkaline pH)<br>
                                                </p>
                                                <hr>
                                                แหล่งที่มา: <p class="text-dark" href="https://www.neonics.co.th/ph/what-is-ph-and-measurement.html">https://www.neonics.co.th/ph/what-is-ph-and-measurement.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--************************************************************-->
<!-- Footer Start -->
<?php
						require_once("footer.php");
					?>
        </section>
    </section>
    <script src="" async defer></script>
</body>

</html>