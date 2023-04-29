<!doctype html>
<html lang="en">

<?php include 'header.php';?>

    <body>
    <main>

        <section class="Payment-section">
            <div class="section-overlay"></div>
            <div class="container">


                <table class="table-striped">
                    <tbody>
                        <tr>
                            <td>
                                <table >
                                    <tbody>
                                        <tr>
                                            <td valign="top">

                                                <table bordercolor="red" cellspacing="0" width="100%"
                                                    bgcolor="#7e97bd" border="1">
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td>
                                                                <h1 style = "text-align: center;">
                                                                    Load Calculator</h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="6px">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="viewTable">
                                                    <div id="UpdatePanel1">
                                                        <table cellspacing="0" cellpadding="2" border="1"
                                                            style="border-width: 1px; border-color: #26759e"
                                                            width="100%" bgcolor="#7e97bd">
                                                            <tbody>
                                                                <tr class="headerTR">
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 160px">
                                                                        Type of Appliances
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 360px">
                                                                        Units/W
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 30px">
                                                                        X
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 80px">
                                                                        No. of Appliance
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 30px">
                                                                        =
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 120px">
                                                                        Load
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 30px">
                                                                        X
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 110px">
                                                                        Usage Per Day Hr
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 30px">
                                                                        =
                                                                    </th>
                                                                    <th class="style2"
                                                                        style="text-align: center; width: 110px">
                                                                        Consumption Per Day(KWH)
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Lamp
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_1"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="25">25W</option>
                                                                                <option value="40">40W</option>
                                                                                <option value="60">60W</option>
                                                                                <option value="75">75W</option>
                                                                                <option value="100">100W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_1" type="text"
                                                                                maxlength="10" id="txtLoadInW_1"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_1" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_1"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_1" type="text"
                                                                            maxlength="10" id="txtLoad_1"
                                                                            readonly="readonly" class="input_number">

                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_1"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH1">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_1" type="text"
                                                                            maxlength="10" id="txtConsPerDay_1"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Ceiling Fan
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_2"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="60">60W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_2" type="text"
                                                                                maxlength="10" id="txtLoadInW_2"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_2" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_2"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_2" type="text"
                                                                            maxlength="10" id="txtLoad_2"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_2"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH2">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_2" type="text"
                                                                            maxlength="10" id="txtConsPerDay_2"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Table Fan
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_3"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="40">40W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_3" type="text"
                                                                                maxlength="10" id="txtLoadInW_3"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_3" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_3"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_3" type="text"
                                                                            maxlength="10" id="txtLoad_3"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_3"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH3">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_3" type="text"
                                                                            maxlength="10" id="txtConsPerDay_3"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        TV
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_4"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="150">150W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_4" type="text"
                                                                                maxlength="10" id="txtLoadInW_4"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_4" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_4"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_4" type="text"
                                                                            maxlength="10" id="txtLoad_4"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_4"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH4">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_4" type="text"
                                                                            maxlength="10" id="txtConsPerDay_4"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Geyser
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_5"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="2000">2000W</option>
                                                                                <option value="3000">3000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_5" type="text"
                                                                                maxlength="10" id="txtLoadInW_5"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_5" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_5"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_5" type="text"
                                                                            maxlength="10" id="txtLoad_5"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_5"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH5">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_5" type="text"
                                                                            maxlength="10" id="txtConsPerDay_5"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Heater
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_6"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="1500">1500W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_6" type="text"
                                                                                maxlength="10" id="txtLoadInW_6"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_6" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_6"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_6" type="text"
                                                                            maxlength="10" id="txtLoad_6"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_6"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH6">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_6" type="text"
                                                                            maxlength="10" id="txtConsPerDay_6"
                                                                            class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Immersion Rod
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_7"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="550">550W</option>
                                                                                <option value="750">750W</option>
                                                                                <option value="1000">1000W</option>
                                                                                <option value="1500">1500W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_7" type="text"
                                                                                maxlength="10" id="txtLoadInW_7"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_7" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_7"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_7" type="text"
                                                                            maxlength="10" id="txtLoad_7"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_7"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH7">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_7" type="text"
                                                                            maxlength="10" id="txtConsPerDay_7"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Refrigerator
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_8"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="-1">165litres</option>
                                                                                <option value="-1">300litres</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_8" type="text"
                                                                                maxlength="10" id="txtLoadInW_8"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_8" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_8"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_8" type="text"
                                                                            maxlength="10" id="txtLoad_8"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_8"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH8">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_8" type="text"
                                                                            maxlength="10" id="txtConsPerDay_8"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Washing Machine
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_9"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="200">200W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_9" type="text"
                                                                                maxlength="10" id="txtLoadInW_9"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_9" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_9"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_9" type="text"
                                                                            maxlength="10" id="txtLoad_9"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_9"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH9">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_9" type="text"
                                                                            maxlength="10" id="txtConsPerDay_9"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Water Pump
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_10"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="-1">1H.P</option>
                                                                                <option value="-1">2H.P</option>
                                                                                <option value="-1">5H.P</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_10" type="text"
                                                                                maxlength="10" id="txtLoadInW_10"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_10" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_10"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_10" type="text"
                                                                            maxlength="10" id="txtLoad_10"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_10"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH10">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_10" type="text"
                                                                            maxlength="10" id="txtConsPerDay_10"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Air Conditioner
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_11"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="-1">1TON</option>
                                                                                <option value="-1">2TON</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_11" type="text"
                                                                                maxlength="10" id="txtLoadInW_11"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_11" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_11"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_11" type="text"
                                                                            maxlength="10" id="txtLoad_11"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_11"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH11">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_11" type="text"
                                                                            maxlength="10" id="txtConsPerDay_11"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Electric Iron
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_12"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="550">550W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_12" type="text"
                                                                                maxlength="10" id="txtLoadInW_12"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_12" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_12"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_12" type="text"
                                                                            maxlength="10" id="txtLoad_12"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_12"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH12">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_12" type="text"
                                                                            maxlength="10" id="txtConsPerDay_12"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Mixer Big.
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_13"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="200">200W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_13" type="text"
                                                                                maxlength="10" id="txtLoadInW_13"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_13" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_13"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_13" type="text"
                                                                            maxlength="10" id="txtLoad_13"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_13"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH13">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_13" type="text"
                                                                            maxlength="10" id="txtConsPerDay_13"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Personal Computer
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_14"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="250">250W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_14" type="text"
                                                                                maxlength="10" id="txtLoadInW_14"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_14" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_14"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_14" type="text"
                                                                            maxlength="10" id="txtLoad_14"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_14"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH14">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_14" type="text"
                                                                            maxlength="10" id="txtConsPerDay_14"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Radio
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_15"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="50">50W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_15" type="text"
                                                                                maxlength="10" id="txtLoadInW_15"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_15" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_15"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_15" type="text"
                                                                            maxlength="10" id="txtLoad_15"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_15"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH15">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_15" type="text"
                                                                            maxlength="10" id="txtConsPerDay_15"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Tape Recoder
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_16"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="50">50W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_16" type="text"
                                                                                maxlength="10" id="txtLoadInW_16"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_16" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_16"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_16" type="text"
                                                                            maxlength="10" id="txtLoad_16"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_16"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH16">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_16" type="text"
                                                                            maxlength="10" id="txtConsPerDay_16"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Dhobi Iron
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_17"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="750">750W</option>
                                                                                <option value="1000">1000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_17" type="text"
                                                                                maxlength="10" id="txtLoadInW_17"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_17" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_17"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_17" type="text"
                                                                            maxlength="10" id="txtLoad_17"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_17"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH17">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_17" type="text"
                                                                            maxlength="10" id="txtConsPerDay_17"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Stove
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_18"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="750">750W</option>
                                                                                <option value="1000">1000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_18" type="text"
                                                                                maxlength="10" id="txtLoadInW_18"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_18" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_18"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_18" type="text"
                                                                            maxlength="10" id="txtLoad_18"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_18"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH18">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_18" type="text"
                                                                            maxlength="10" id="txtConsPerDay_18"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Electric Cooker
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_19"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="1500">1500W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_19" type="text"
                                                                                maxlength="10" id="txtLoadInW_19"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_19" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_19"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_19" type="text"
                                                                            maxlength="10" id="txtLoad_19"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_19"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH19">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_19" type="text"
                                                                            maxlength="10" id="txtConsPerDay_19"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        T Ster
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_20"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="100">100W</option>
                                                                                <option value="1800">1800W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_20" type="text"
                                                                                maxlength="10" id="txtLoadInW_20"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_20" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_20"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_20" type="text"
                                                                            maxlength="10" id="txtLoad_20"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_20"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH20">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_20" type="text"
                                                                            maxlength="10" id="txtConsPerDay_20"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Cloth Drier / Spind Drier
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_21"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="200">200W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_21" type="text"
                                                                                maxlength="10" id="txtLoadInW_21"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_21" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_21"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_21" type="text"
                                                                            maxlength="10" id="txtLoad_21"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_21"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH21">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_21" type="text"
                                                                            maxlength="10" id="txtConsPerDay_21"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Radiator
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_22"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="1000">1000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_22" type="text"
                                                                                maxlength="10" id="txtLoadInW_22"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_22" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_22"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_22" type="text"
                                                                            maxlength="10" id="txtLoad_22"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_22"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH22">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_22" type="text"
                                                                            maxlength="10" id="txtConsPerDay_22"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Electric Clock
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_23"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="5">5W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 23px">
                                                                            <input name="txtLoadInW_23" type="text"
                                                                                maxlength="10" id="txtLoadInW_23"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_23" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_23"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_23" type="text"
                                                                            maxlength="10" id="txtLoad_23"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_23"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH23">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_23" type="text"
                                                                            maxlength="10" id="txtConsPerDay_23"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Oven 2 plates / 3 plates
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_24"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="3000">3000W</option>
                                                                                <option value="5000">5000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_24" type="text"
                                                                                maxlength="10" id="txtLoadInW_24"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_24" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_24"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_24" type="text"
                                                                            maxlength="10" id="txtLoad_24"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_24"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH24">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_24" type="text"
                                                                            maxlength="10" id="txtConsPerDay_24"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Cooking Range
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left; height: 25px">
                                                                            <select id="ddlLoadPerDay_25"
                                                                                style="width: 75px; height: 22px;">
                                                                                <option value="0" selected="selected">
                                                                                    -Select-</option>
                                                                                <option value="5000">5000W</option>
                                                                                <option value="-1">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div style="float: right; height: 25px">
                                                                            <input name="txtLoadInW_25" type="text"
                                                                                maxlength="10" id="txtLoadInW_25"
                                                                                readonly="readonly" class="input_number"
                                                                                style="width: 80px;">
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center" class="style3">
                                                                        X
                                                                    </td>
                                                                    <td class="style4">
                                                                        <input name="txtNumerOfEquipment_25" type="text"
                                                                            maxlength="10" id="txtNumerOfEquipment_25"
                                                                            class="input_number">
                                                                    </td>
                                                                    <td style="text-align: center" class="style5">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtLoad_25" type="text"
                                                                            maxlength="10" id="txtLoad_25"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                    <td class="style3">
                                                                        X
                                                                    </td>
                                                                    <td>
                                                                        <select id="ddlHr_25"
                                                                            style="width: 75px; height: 22px;"
                                                                            name="DH25">
                                                                            <option value="0" selected="selected">
                                                                                -Select-</option>
                                                                            <option value="0.25">15M</option>
                                                                            <option value="0.50">30M</option>
                                                                            <option value="0.75">45M</option>
                                                                            <option value="1">1 Hr</option>
                                                                            <option value="1.5">1.5 Hr</option>
                                                                            <option value="2">2 Hr</option>
                                                                            <option value="2.5">2.5 Hr</option>
                                                                            <option value="3">3 Hr</option>
                                                                            <option value="3.5">3.5 Hr</option>
                                                                            <option value="4">4 Hr</option>
                                                                            <option value="4.5">4.5 Hr</option>
                                                                            <option value="5">5 Hr</option>
                                                                            <option value="5.5">5.5 Hr</option>
                                                                            <option value="6">6 Hr</option>
                                                                            <option value="6.5">6.5 Hr</option>
                                                                            <option value="7">7 Hr</option>
                                                                            <option value="7.5">7.5 Hr</option>
                                                                            <option value="8">8 Hr</option>
                                                                            <option value="8.5">8.5 Hr</option>
                                                                            <option value="9">9 Hr</option>
                                                                            <option value="9.5">9.5 Hr</option>
                                                                            <option value="10">10 Hr</option>
                                                                            <option value="10.5">10.5 Hr</option>
                                                                            <option value="11">11 Hr</option>
                                                                            <option value="11.5">11.5 Hr</option>
                                                                            <option value="12">12 Hr</option>
                                                                            <option value="12.5">12.5 Hr</option>
                                                                            <option value="13">13 Hr</option>
                                                                            <option value="13.5">13.5 Hr</option>
                                                                            <option value="14">14 Hr</option>
                                                                            <option value="14.5">14.5 Hr</option>
                                                                            <option value="15">15 Hr</option>
                                                                            <option value="15.5">15.5 Hr</option>
                                                                            <option value="16">16 Hr</option>
                                                                            <option value="16.5">16.5 Hr</option>
                                                                            <option value="17">17 Hr</option>
                                                                            <option value="17.5">17.5 Hr</option>
                                                                            <option value="18">18 Hr</option>
                                                                            <option value="18.5">18.5 Hr</option>
                                                                            <option value="19">19 Hr</option>
                                                                            <option value="19.5">19.5 Hr</option>
                                                                            <option value="20">20 Hr</option>
                                                                            <option value="21.5">21.5 Hr</option>
                                                                            <option value="22">22 Hr</option>
                                                                            <option value="22.5">22.5 Hr</option>
                                                                            <option value="23">23 Hr</option>
                                                                            <option value="23.5">23.5 Hr</option>
                                                                            <option value="24">24 Hr</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="style3">
                                                                        =
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtConsPerDay_25" type="text"
                                                                            maxlength="10" id="txtConsPerDay_25"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td colspan="6" style="height: 5px">
                                                                    </td>
                                                                    <td style="height: 5px">
                                                                        &nbsp;
                                                                    </td>
                                                                    <td style="height: 5px">
                                                                        &nbsp;
                                                                    </td>
                                                                    <td style="height: 5px">
                                                                        &nbsp;
                                                                    </td>
                                                                    <td style="height: 5px">
                                                                        &nbsp;
                                                                    </td>
                                                                </tr>
                                                                <tr class="AlternateChange">
                                                                    <td colspan="3" align="right">
                                                                        <span>Total Load (W) :</span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="txtTotalLoad" class="input_number"
                                                                            style="display: inline-block; width: 55%;">
                                                                        </span>
                                                                    </td>

                                                                    <td colspan="4" align="right">
                                                                        <strong>Consumption Per day
                                                                        </strong>
                                                                    </td>
                                                                    <td>
                                                                        &nbsp;
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtTotalConsPD" type="text"
                                                                            maxlength="10" id="txtTotalConsPD"
                                                                            readonly="readonly" class="input_number">
                                                                    </td>
                                                                </tr>
                                                                <tr class="headerTR">

                                                                    <td colspan="8" class="style2" align="right">
                                                                        Consumption Per Month
                                                                    </td>
                                                                    <td>
                                                                        &nbsp;
                                                                    </td>
                                                                    <td>
                                                                        <input name="txtTotalConsPD0" type="text"
                                                                            maxlength="10" id="txtTotalConsPM"
                                                                            readonly="readonly"
                                                                            class="input_number"><span class="style2">
                                                                            KWH (Unit)</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>




            </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php';?>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(function () {
            for (var i = 1; i <= 30; i++) {
                $("#txtNumerOfEquipment_" + i.toString()).click(function (event) {
                    txtNumerOfEquipment_Click(event.target.id);
                });
                $("#txtNumerOfEquipment_" + i.toString()).change(function (event) {
                    txtNumerOfEquipment_Changed(event.target.id);
                });
                $("#ddlLoadPerDay_" + i.toString()).change(function (event) {
                    ddlLoadPerDay_OnSelectedIndexChanged(event.target.id);
                });
                $("#txtLoadInW_" + i.toString()).change(function (event) {
                    txtLoadInW_Changed(event.target.id);
                });
                $("#ddlHr_" + i.toString()).change(function (event) {
                    ddlHr_OnSelectedIndexChanged(event.target.id);
                });
            }
        });

        function txtNumerOfEquipment_Click(ArgValue) {
            try {
                var strIndex = ArgValue.toString().split("_")[1];
                var ddlValue = $("#ddlLoadPerDay_" + strIndex).val();
                if (ddlValue == 0) {
                    $("#ddlLoadPerDay_" + strIndex).focus();
                }
            }
            catch (ex) {
                alert(ex);
            }
        }
        function txtNumerOfEquipment_Changed(ArgValue) {
            try {
                var strIndex = ArgValue.toString().split("_")[1];
                var ddlValue = $("#ddlLoadPerDay_" + strIndex).val();
                var strNumerOfEquipment = document.getElementById(ArgValue).value;
                if (isNaN(parseInt(strNumerOfEquipment))) {
                    strNumerOfEquipment = 0;
                }
                if (ddlValue == -1) {
                    ddlValue = $("#txtLoadInW_" + strIndex).val();
                    $("#txtLoad_" + strIndex).val(parseInt(ddlValue) * parseInt(strNumerOfEquipment));
                }
                else {
                    $("#txtLoad_" + strIndex).val(parseInt(ddlValue) * parseInt(strNumerOfEquipment));
                }

                var ddlValue1 = $("#ddlHr_" + strIndex).val();
                var strLoad1 = $("#txtLoad_" + strIndex).val();
                if (ddlValue1 == -1) {
                    $("#ddlHr_" + strIndex).val("0");
                    $("#txtConsPerDay_" + strIndex).attr('readonly', false);
                    $("#txtConsPerDay_" + strIndex).val("");
                    $("#txtConsPerDay_" + strIndex).focus();
                }
                else {
                    $("#txtConsPerDay_" + strIndex).val(parseFloat(((ddlValue1) * parseInt(strLoad1)) / 1000));
                    CalculateTotal1();
                    CalculateTotal2();
                }

                CalculateTotal();
            }
            catch (ex) {
                alert(ex);
            }
        }
        function ddlLoadPerDay_OnSelectedIndexChanged(ArgValue) {
            try {
                var strIndex = ArgValue.toString().split("_")[1];
                var ddlValue = document.getElementById(ArgValue).value;
                var strNumerOfEquipment = $("#txtNumerOfEquipment_" + strIndex).val();
                if (isNaN(parseInt(strNumerOfEquipment))) {
                    strNumerOfEquipment = 0;
                }
                if (ddlValue == -1) {
                    $("#txtLoadInW_" + strIndex).attr('readonly', false);
                    $("#txtLoadInW_" + strIndex).val("");
                    $("#txtLoadInW_" + strIndex).focus();
                    $("#txtLoad_" + strIndex).val("");
                }
                else {
                    $("#txtLoadInW_" + strIndex).attr('readony', true);
                    $("#txtLoadInW_" + strIndex).val(parseInt(ddlValue));
                    $("#txtLoad_" + strIndex).val(parseInt(ddlValue) * parseInt(strNumerOfEquipment));
                    CalculateTotal();
                }
            }
            catch (ex) {
                alert(ex);
            }
        }

        function txtLoadInW_Changed(ArgValue) {
            try {
                var strIndex = ArgValue.toString().split("_")[1];
                var strNumerOfEquipment = $("#txtNumerOfEquipment_" + strIndex).val();
                var strLoadInW = document.getElementById(ArgValue).value;
                if (isNaN(parseInt(strNumerOfEquipment))) {
                    strNumerOfEquipment = 0;
                }
                if (isNaN(parseInt(strLoadInW))) {
                    strLoadInW = 0;
                }

                $("#txtLoad_" + strIndex).val(parseInt(strNumerOfEquipment) * parseInt(strLoadInW));
                CalculateTotal();
            }
            catch (ex) {
                alert(ex);
            }
        }

        function CalculateTotal() {
            try {
                var totalLoad = 0;
                for (var i = 1; i <= 30; i++) {
                    var value = parseInt($("#txtLoad_" + i).val());
                    if (isNaN(value)) {
                        value = 0;
                    }
                    totalLoad = totalLoad + value;
                }
                $("#txtTotalLoad").html(totalLoad);
            }
            catch (ex) {
                alert(ex);
            }
        }

        function CalculateTotal1() {
            try {
                var totalLoad = 0;
                for (var i = 1; i <= 30; i++) {
                    var value = parseFloat($("#txtConsPerDay_" + i).val());
                    if (isNaN(value)) {
                        value = 0;
                    }
                    totalLoad = totalLoad + value;
                }
                $("#txtTotalConsPD").val(totalLoad.toFixed(2));
            }
            catch (ex) {
                alert(ex);
            }
        }

        function CalculateTotal2() {
            try {
                var totalLoad = 0;

                var t1 = parseFloat($("#txtTotalConsPD").val());

                totalLoad = (t1 * 30);

                $("#txtTotalConsPM").val(Math.round(totalLoad));
            }
            catch (ex) {
                alert(ex);
            }
        }


        function ddlHr_OnSelectedIndexChanged(ArgValue) {
            try {
                var strIndex = ArgValue.toString().split("_")[1];
                var ddlValue = document.getElementById(ArgValue).value;
                var strLoad = $("#txtLoad_" + strIndex).val();
                if (isNaN(parseInt(strLoad))) {
                    strLoad = 0;
                }
                if (ddlValue == -1) {
                    $("#txtConsPerDay_" + strIndex).attr('readonly', false);
                    $("#txtConsPerDay_" + strIndex).val("");
                    $("#txtConsPerDay_" + strIndex).focus();
                    $("#txtLoad_" + strIndex).val("");
                }
                else {
                    //                    $("#txtConsPerDay_" + strIndex).attr('disabled', true);
                    //                    $("#txtConsPerDay_" + strIndex).val(parseInt(ddlValue));
                    $("#txtConsPerDay_" + strIndex).val(parseFloat(((ddlValue) * parseInt(strLoad)) / 1000));
                    CalculateTotal1();
                    CalculateTotal2();
                }
            }
            catch (ex) {
                alert(ex);
            }
        }
    </script>
</body>

</html>