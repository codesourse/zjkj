<?php
    error_reporting(0);
    error_reporting(E_ALL & ~E_NOTICE);
    header("Content-Type: text/html; charset=utf-8");
    $postData=$_POST["requestData"];
    $post=json_decode($postData,true);
 
   // echo var_dump($post['api_name']);
    //检验列表
    if(strcmp($post['api_name'], "api.cz.examine.list")==0){
        $row = '{"return_code":0,"return_params":{"ret_code":0,"list":[{"test_no":"1312114831","specimen":"粪","notes_for_spcm":"临检_粪便检查","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114832","specimen":"血","notes_for_spcm":"生化_脂类检测","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114833","specimen":"血","notes_for_spcm":"生化_常规生化","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114834","specimen":"血","notes_for_spcm":"免疫_肿瘤免疫","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114835","specimen":"血","notes_for_spcm":"免疫_内分泌","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114836","specimen":"血","notes_for_spcm":"病毒_肝炎系列","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114837","specimen":"血","notes_for_spcm":"病毒_PCR系列","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114838","specimen":"血","notes_for_spcm":"病毒_病原系列","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114839","specimen":"尿","notes_for_spcm":"临检_尿液检查","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114840","specimen":"血","notes_for_spcm":"临检_血液检查","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114841","specimen":"血","notes_for_spcm":"临检_血沉检测","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312114842","specimen":"血","notes_for_spcm":"生化_糖化血红蛋","requested_date_time":"2013-12-11 07:28:13"},{"test_no":"1312308599","specimen":"血","notes_for_spcm":"免疫_仪器报告","requested_date_time":"2013-12-30 13:00:28"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.inspect.list")==0)//检查列表
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"list":[{"exam_no":"R00831727","exam_class":"超声","exam_sub_class":"血管"},{"exam_no":"R00831724","exam_class":"超声","exam_sub_class":"腹部"},{"exam_no":"3873910","exam_class":"肺功能","exam_sub_class":"肺功能"},{"exam_no":"3873892","exam_class":"DCG","exam_sub_class":"DCG"},{"exam_no":"R00833024","exam_class":"DSA","exam_sub_class":"大血管"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.examine.details")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"list":[{"report_item_name":"总胆固醇","result":"3.68","units":"mmol/L","abnormal_indicator":"M","reference":"<5.2"},{"report_item_name":"甘油三脂","result":"2.45","units":"mmol/L","abnormal_indicator":"H","reference":"0-1.7"},{"report_item_name":"高密度脂蛋白","result":"0.63","units":"mmol/L","abnormal_indicator":"L","reference":"0.8-2.85"},{"report_item_name":"低密度脂蛋白★","result":"2.48","units":"mmol/L","abnormal_indicator":"M","reference":"1.3-4.9"},{"report_item_name":"载脂蛋白AI","result":"1.13","units":"g/L","abnormal_indicator":"M","reference":"1.0-1.6"},{"report_item_name":"载脂蛋白B","result":"1.03","units":"g/L","abnormal_indicator":"M","reference":"0.6-1.20"},{"report_item_name":"脂蛋白(a)","result":"80","units":"mg/L","abnormal_indicator":"M","reference":"0-300"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.inspect.details")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"obj":{"description":"双侧股动脉至腘动脉扫查：走行规则，内膜连续性好，回声正常，内中膜厚度约为0.7 mm(右侧)、0.8 mm(左侧)，管腔内透声良好；CDFI显示：血流充盈良好，血流曲线形态正常，呈三相波。双侧股静脉至腘静脉扫查：走行正常，管壁压缩性良好，管腔内透声良好；CDFI：血流充盈良好，流向、流速正常。","impression":"双下肢血管未见明显异常"}}}';
    }else if(strcmp($post['api_name'], "api.cz.query.no")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","list":[{"srvgroup_name":"整形外科普通门诊","queue_no":"48"},{"srvgroup_name":"消化科普通门诊","queue_no":"230"},{"srvgroup_name":"神经内科普通门诊","queue_no":"173"},{"srvgroup_name":"眼科普通门诊","queue_no":"103"},{"srvgroup_name":"眼科特需李由","staff_name":"李由","queue_no":"6"},{"srvgroup_name":"普外一科普通门诊","queue_no":"54"},{"srvgroup_name":"关节外科普通门诊","queue_no":"106"},{"srvgroup_name":"眼科(程金伟)","staff_name":"程金伟","queue_no":"5"},{"srvgroup_name":"皮肤(顾菊林)","staff_name":"顾菊林","queue_no":"23"},{"srvgroup_name":"脊柱外科普通门诊","queue_no":"116"},{"srvgroup_name":"呼吸科普通门诊","queue_no":"323"},{"srvgroup_name":"神外一科普通门诊","queue_no":"6"},{"srvgroup_name":"口腔科普通门诊","queue_no":"113"},{"srvgroup_name":"普外二科普通门诊","queue_no":"26"},{"srvgroup_name":"神外二(陈长策)","staff_name":"陈长策","queue_no":"5"},{"srvgroup_name":"胸心二科普通门诊","queue_no":"4"},{"srvgroup_name":"耳鼻喉(肖壁君)","staff_name":"萧璧君","queue_no":"11"},{"srvgroup_name":"心内科普通门诊","queue_no":"465"},{"srvgroup_name":"妇科普通门诊","queue_no":"87"},{"srvgroup_name":"普外三科普通门诊","queue_no":"54"},{"srvgroup_name":"肝癌肝移植","queue_no":"34"},{"srvgroup_name":"骨创(林浩东)","staff_name":"林浩东","queue_no":"5"},{"srvgroup_name":"肾内(戎殳)","staff_name":"戎殳","queue_no":"57"},{"srvgroup_name":"血液科普通门诊","queue_no":"39"},{"srvgroup_name":"泌外特需徐丹枫","staff_name":"徐丹枫","queue_no":"1"},{"srvgroup_name":"皮肤科普通门诊","queue_no":"221"},{"srvgroup_name":"耳鼻喉科普通门诊","queue_no":"122"},{"srvgroup_name":"小儿科普通门诊","queue_no":"38"},{"srvgroup_name":"心内(赵学)","staff_name":"赵学","queue_no":"22"},{"srvgroup_name":"脂肪肝","queue_no":"1"},{"srvgroup_name":"生殖中心普通门诊","queue_no":"41"},{"srvgroup_name":"肾内科普通门诊","queue_no":"125"},{"srvgroup_name":"风湿科普通门诊","queue_no":"46"},{"srvgroup_name":"内分泌科普通门诊","queue_no":"250"},{"srvgroup_name":"神外二科普通门诊","queue_no":"12"},{"srvgroup_name":"泌尿外科普通门诊","queue_no":"138"},{"srvgroup_name":"心理门诊","queue_no":"8"},{"srvgroup_name":"消化(施斌)","staff_name":"施斌","queue_no":"37"},{"srvgroup_name":"普三(张军初)","staff_name":"张军初","queue_no":"1"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.examine.details")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","list":[{"srvgroup_name":"整形外科普通门诊","queue_no":"48"},{"srvgroup_name":"消化科普通门诊","queue_no":"230"},{"srvgroup_name":"神经内科普通门诊","queue_no":"173"},{"srvgroup_name":"眼科普通门诊","queue_no":"103"},{"srvgroup_name":"眼科特需李由","staff_name":"李由","queue_no":"6"},{"srvgroup_name":"普外一科普通门诊","queue_no":"54"},{"srvgroup_name":"关节外科普通门诊","queue_no":"106"},{"srvgroup_name":"眼科(程金伟)","staff_name":"程金伟","queue_no":"5"},{"srvgroup_name":"皮肤(顾菊林)","staff_name":"顾菊林","queue_no":"23"},{"srvgroup_name":"脊柱外科普通门诊","queue_no":"116"},{"srvgroup_name":"呼吸科普通门诊","queue_no":"323"},{"srvgroup_name":"神外一科普通门诊","queue_no":"6"},{"srvgroup_name":"口腔科普通门诊","queue_no":"113"},{"srvgroup_name":"普外二科普通门诊","queue_no":"26"},{"srvgroup_name":"神外二(陈长策)","staff_name":"陈长策","queue_no":"5"},{"srvgroup_name":"胸心二科普通门诊","queue_no":"4"},{"srvgroup_name":"耳鼻喉(肖壁君)","staff_name":"萧璧君","queue_no":"11"},{"srvgroup_name":"心内科普通门诊","queue_no":"465"},{"srvgroup_name":"妇科普通门诊","queue_no":"87"},{"srvgroup_name":"普外三科普通门诊","queue_no":"54"},{"srvgroup_name":"肝癌肝移植","queue_no":"34"},{"srvgroup_name":"骨创(林浩东)","staff_name":"林浩东","queue_no":"5"},{"srvgroup_name":"肾内(戎殳)","staff_name":"戎殳","queue_no":"57"},{"srvgroup_name":"血液科普通门诊","queue_no":"39"},{"srvgroup_name":"泌外特需徐丹枫","staff_name":"徐丹枫","queue_no":"1"},{"srvgroup_name":"皮肤科普通门诊","queue_no":"221"},{"srvgroup_name":"耳鼻喉科普通门诊","queue_no":"122"},{"srvgroup_name":"小儿科普通门诊","queue_no":"38"},{"srvgroup_name":"心内(赵学)","staff_name":"赵学","queue_no":"22"},{"srvgroup_name":"脂肪肝","queue_no":"1"},{"srvgroup_name":"生殖中心普通门诊","queue_no":"41"},{"srvgroup_name":"肾内科普通门诊","queue_no":"125"},{"srvgroup_name":"风湿科普通门诊","queue_no":"46"},{"srvgroup_name":"内分泌科普通门诊","queue_no":"250"},{"srvgroup_name":"神外二科普通门诊","queue_no":"12"},{"srvgroup_name":"泌尿外科普通门诊","queue_no":"138"},{"srvgroup_name":"心理门诊","queue_no":"8"},{"srvgroup_name":"消化(施斌)","staff_name":"施斌","queue_no":"37"},{"srvgroup_name":"普三(张军初)","staff_name":"张军初","queue_no":"1"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.dept.list")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","list":[{"dept_code":"3406","dept_name":"超声科门诊"},{"dept_code":"2604","dept_name":"耳鼻喉科门诊"},{"dept_code":"5102","dept_name":"风湿免疫科门诊"},{"dept_code":"2803","dept_name":"妇产科门诊"},{"dept_code":"5304","dept_name":"肝移植门诊"},{"dept_code":"2203","dept_name":"感染科门诊"},{"dept_code":"1324","dept_name":"骨创伤外科门诊"},{"dept_code":"1327","dept_name":"骨肿瘤外科门诊"},{"dept_code":"1321","dept_name":"关节外科门诊"},{"dept_code":"0703","dept_name":"呼吸科门诊"},{"dept_code":"1318","dept_name":"脊柱外科门诊"},{"dept_code":"4503","dept_name":"康健苑门诊"},{"dept_code":"2702","dept_name":"口腔科门诊"},{"dept_code":"3304","dept_name":"理疗科门诊"},{"dept_code":"39","dept_name":"门诊部"},{"dept_code":"1503","dept_name":"泌尿外科门诊"},{"dept_code":"1103","dept_name":"内分泌科门诊"},{"dept_code":"2403","dept_name":"皮肤科门诊"},{"dept_code":"1221","dept_name":"普外二科门诊"},{"dept_code":"1224","dept_name":"普外三科门诊"},{"dept_code":"1218","dept_name":"普外一科门诊"},{"dept_code":"61","dept_name":"其他开单科室"},{"dept_code":"6001","dept_name":"全军肺癌诊治中心"},{"dept_code":"2302","dept_name":"神经内科门诊"},{"dept_code":"1414","dept_name":"神外二科门诊"},{"dept_code":"1411","dept_name":"神外一科门诊"},{"dept_code":"1004","dept_name":"肾内科门诊"},{"dept_code":"5303","dept_name":"肾移植门诊"},{"dept_code":"2806","dept_name":"生殖中心"},{"dept_code":"0803","dept_name":"消化科门诊"},{"dept_code":"2903","dept_name":"小儿科门诊"},{"dept_code":"040801","dept_name":"心理门诊"},{"dept_code":"0603","dept_name":"心内科门诊"},{"dept_code":"1614","dept_name":"胸心二科门诊"},{"dept_code":"1611","dept_name":"胸心一科门诊"},{"dept_code":"6503","dept_name":"血管外科门诊"},{"dept_code":"0903","dept_name":"血液科门诊"},{"dept_code":"2504","dept_name":"眼科门诊"},{"dept_code":"3214","dept_name":"影像科门诊"},{"dept_code":"1703","dept_name":"整形外科门诊"},{"dept_code":"2104","dept_name":"中医科门诊"},{"dept_code":"4303","dept_name":"肿瘤科门诊"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.doctor.list")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","id":"35","list":[{"doctor_name":"范静平","doctor_title":"主任医师"},{"doctor_name":"郎军添","doctor_title":"副主任医师"},{"doctor_name":"廖建春","doctor_title":"主任医师"},{"doctor_name":"林顺涨","doctor_title":"主任医师"},{"doctor_name":"彭玉成","doctor_title":"副主任医师"},{"doctor_name":"孙爱华","doctor_title":"主任医师"},{"doctor_name":"王海青","doctor_title":"副主任医师"},{"doctor_name":"吴建","doctor_title":"主任医师"},{"doctor_name":"肖壁君","doctor_title":"主任医师"},{"doctor_name":"赵舒薇","doctor_title":"主任医师"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.doctor.pre.date")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","id":"35","list":[{"clinic_date":"2014-01-13","day_of_week":"星期一","clinic_label":"五官特需范静平","clinic_type":"特需","time_desc":"上午","available_flag":0},{"clinic_date":"2014-01-14","day_of_week":"星期二","clinic_label":"耳鼻喉(范静平)","clinic_type":"专家号","time_desc":"上午","available_flag":0}]}}';
    }else if(strcmp($post['api_name'], "api.cz.appointment.valid")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }else if(strcmp($post['api_name'], "api.cz.appointment")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","obj":{"visit_date":"2014-01-13","time_desc":"上午","phone_number":"15924134243","doctor_name":"范静平","identity_id":"310117199208153811","name":"齐心"}}}';
    }else if(strcmp($post['api_name'], "api.cz.record.list")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","total_count":2,"page_count":1,"list":[{"id":"34","name":"七夕","clinic_date":"2014-01-13","time_desc":"上午","appt_flag":"未就诊"},{"id":"36","name":"齐心","clinic_date":"2014-01-13","time_desc":"上午","appt_flag":"未就诊"}]}}';
    }else if(strcmp($post['api_name'], "api.cz.record.details")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","id":"36","obj":{"clinic_label":"五官特需范静平","clinic_date":"2014-01-13","time_desc":"上午","name":"齐心","phone_number":"15924134243","identity_id":"310117199208153811","appt_flag":"未就诊","sex":"1","isablcancel":"-1"}}}';
    }else if(strcmp($post['api_name'], "api.cz.cancel.appoint")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }
    //////////////////////////////////////////////////////////////////////
    else if(strcmp($post['api_name'], "api.cz.regist.valid")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }else if(strcmp($post['api_name'], "api.cz.user.regist")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"id":46}}';
    }else if(strcmp($post['api_name'], "api.cz.info.modify")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }else if(strcmp($post['api_name'], "api.cz.login")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"user":{"login_name":"15924134241","name":"猴子兽","sex":"2","id_card":"330682199006177415"},"session_id":"8373f99deffda5e71b8da626aacdeb1ad445292ef6a3e713d7e6be6c7906fe35"}}';
    }else if(strcmp($post['api_name'], "api.cz.forgot.password")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }else if(strcmp($post['api_name'], "api.cz.change.password")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功"}}';
    }else if(strcmp($post['api_name'], "api.cz.user.detail")==0)
    {
        $row = '{"return_code":0,"return_params":{"ret_code":0,"ret_info":"成功","obj":{"id":46,"login_name":"15924134241","real_name":"小小","id_card":"310117199208153898","sex":"1","create_time":"2014-01-08 16:08","last_login_time":"2014-01-08 16:19","birthday":"900110","login_time":"2","update_time":"2014-01-08 16:24"}}}';
    }
    

    $jsonencode = json_encode($row);
    $result = substr ($jsonencode, 1,strlen($jsonencode)-2);
    $jsonencode=str_replace('\"','"', $result);
    echo $jsonencode;



?>
   
