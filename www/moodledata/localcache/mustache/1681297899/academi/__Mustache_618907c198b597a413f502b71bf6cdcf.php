<?php

class __Mustache_618907c198b597a413f502b71bf6cdcf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('footer');
        $buffer .= $this->sectionC4c28cc18172759e93152be75d364972($context, $indent, $value);

        return $buffer;
    }

    private function section9b089e00077ec061918a3e4dd2d05479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/add, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/add, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54aab8e76707ad03d0b421f1f1cfed41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' newevent, calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' newevent, calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5977f49e299d8583012bfa04b164e78f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="{{{addeventurl}}}">
	{{#pix }} t/add, core {{/pix }}
	{{#str}} newevent, calendar {{/str}}
</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<a href="';
                $value = $this->resolveValue($context->find('addeventurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '	';
                $value = $context->find('pix');
                $buffer .= $this->section9b089e00077ec061918a3e4dd2d05479($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	';
                $value = $context->find('str');
                $buffer .= $this->section54aab8e76707ad03d0b421f1f1cfed41($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46892f554fd2ea1744654e1e55273ef5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/calendar, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/calendar, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43f93c2204353d3f23a0594a72c9a725(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotocalendar, calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotocalendar, calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4c28cc18172759e93152be75d364972(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#manageentries}}
<a href="{{{addeventurl}}}">
	{{#pix }} t/add, core {{/pix }}
	{{#str}} newevent, calendar {{/str}}
</a>
{{/manageentries}}
<a class="pull-right" href="{{{calendarurl}}}">
	{{#pix }} i/calendar, core {{/pix }}
	{{#str}} gotocalendar, calendar {{/str}}
</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('manageentries');
                $buffer .= $this->section5977f49e299d8583012bfa04b164e78f($context, $indent, $value);
                $buffer .= $indent . '<a class="pull-right" href="';
                $value = $this->resolveValue($context->find('calendarurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '	';
                $value = $context->find('pix');
                $buffer .= $this->section46892f554fd2ea1744654e1e55273ef5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	';
                $value = $context->find('str');
                $buffer .= $this->section43f93c2204353d3f23a0594a72c9a725($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
