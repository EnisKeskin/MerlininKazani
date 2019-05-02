<?php

survey();
survey_ans_count();
if (post("oyla") == 1) {
    if (post("anket")) {
        if (session('userid')) {
            if (survey_usr(session('userid'), $survey_info['anket_ust_id'])) {
                take_usr(session('userid'), $survey_info['anket_ust_id']);
                $survey_val = post("anket");
                take_survey($survey_val);
            }
        }
    }
}
require view('index');
