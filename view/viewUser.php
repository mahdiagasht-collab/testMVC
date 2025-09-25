<div style="
    display:            flex;
    justify-content:    center;
    ">
    <div style="
        background-color:       bisque;
        padding:                10px;
        margin:                 10px;
        border-radius:          10px;
        display:                flex;
        flex-direction:         column;
        align-items:            center;
        width:                  80%;
        flex-direction:         row;
        ">
        <div style="
            background-color:           azure;
            margin:                     10px;
            padding:                    10px;
            border-radius:              10px;
            width:                      10%;
            display:                    flex;
            justify-content:            space-around;
            align-items:                center;
        ">
            <?= $result['id'] ?>
        </div>
        <div style="
            background-color:           azure;
            margin:                     10px;
            padding:                    10px;
            border-radius:              10px;
            width:                      96%;
            display:                    flex;
            justify-content:            space-around;
            align-items:                center;
        ">
            <?= $result['name'] ?>
        </div>
        <div style="
            background-color:           azure;
            margin:                     10px;
            padding:                    10px;
            border-radius:              10px;
            width:                      96%;
            display:                    flex;
            justify-content:            space-around;
            align-items:                center;
        ">
            <?= $result['family'] ?>
        </div>
        <div style="
            background-color:           azure;
            margin:                     10px;
            padding:                    10px;
            border-radius:              10px;
            width:                      96%;
            display:                    flex;
            justify-content:            space-around;
            align-items:                center;
        ">
            <?= $result['phonNumber'] ?>
        </div>
    </div>
</div>