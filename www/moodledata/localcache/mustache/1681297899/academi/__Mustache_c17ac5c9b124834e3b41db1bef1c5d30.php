<?php

class __Mustache_c17ac5c9b124834e3b41db1bef1c5d30 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="timetable-events';
        $value = $this->resolveValue($context->find('instanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="timetable ';
        $value = $this->resolveValue($context->find('blockview'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-template="block_timetable/event" >
';
        if ($partial = $this->mustache->loadPartial('block_timetable/events')) {
            $buffer .= $partial->renderInternal($context, $indent . '     ');
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionAf20c042e0738765138c8072a5011c25($context, $indent, $value);

        return $buffer;
    }

    private function sectionAf20c042e0738765138c8072a5011c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#inst{{instanceid}} .timetable"), \'upcoming\');
    $("body").on("click", ".timeblock{{instanceid}}", function() {
        var url = $(this).data(\'url\');
        var mode = $(this).data(\'mode\');
        $.ajax({
           url: url,
        }).done(function(html) {
            $("#timetable-events{{instanceid}}").html(html.output);
            if (mode == "thisweek") {
                $("#cal{{instanceid}}").show();
            } else {
               $("#cal{{instanceid}}").hide();
            }
        });
    });
    $("body").on("click", ".dateblock{{instanceid}}", function() {
        $(".dateblock_day{{instanceid}}").removeClass(\'active\');
        $(this).parent("div").addClass(\'active\');
        var url = $(this).data(\'url\');
        var mode = $(this).data(\'mode\');
        $.ajax({
            url: url,
        }).done(function(html) {
        $("#timetable-events{{instanceid}}").html(html.output);
            if (mode == "thisweek") {
                $("#cal{{instanceid}}").show();
            } else {
                $("#cal{{instanceid}}").hide();
            }
        });
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
';
                $buffer .= $indent . '    CalendarView.init($("#inst';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .timetable"), \'upcoming\');
';
                $buffer .= $indent . '    $("body").on("click", ".timeblock';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", function() {
';
                $buffer .= $indent . '        var url = $(this).data(\'url\');
';
                $buffer .= $indent . '        var mode = $(this).data(\'mode\');
';
                $buffer .= $indent . '        $.ajax({
';
                $buffer .= $indent . '           url: url,
';
                $buffer .= $indent . '        }).done(function(html) {
';
                $buffer .= $indent . '            $("#timetable-events';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").html(html.output);
';
                $buffer .= $indent . '            if (mode == "thisweek") {
';
                $buffer .= $indent . '                $("#cal';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").show();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '               $("#cal';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").hide();
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $("body").on("click", ".dateblock';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", function() {
';
                $buffer .= $indent . '        $(".dateblock_day';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").removeClass(\'active\');
';
                $buffer .= $indent . '        $(this).parent("div").addClass(\'active\');
';
                $buffer .= $indent . '        var url = $(this).data(\'url\');
';
                $buffer .= $indent . '        var mode = $(this).data(\'mode\');
';
                $buffer .= $indent . '        $.ajax({
';
                $buffer .= $indent . '            url: url,
';
                $buffer .= $indent . '        }).done(function(html) {
';
                $buffer .= $indent . '        $("#timetable-events';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").html(html.output);
';
                $buffer .= $indent . '            if (mode == "thisweek") {
';
                $buffer .= $indent . '                $("#cal';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").show();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $("#cal';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").hide();
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
