<?php

class __Mustache_76a0d192c247aec033b5bdf86eddd1c2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('events');
        $buffer .= $this->section2d4a5f32bdbbd9e56aec3e97b83b6531($context, $indent, $value);
        $value = $context->find('events');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section67ada18cce7e46ad84d774c8a4b7a284($context, $indent, $value);
            $buffer .= '
';
        }

        return $buffer;
    }

    private function section8a29fb6d779749966ffedab6189fedbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="coursename">{{coursename}}</span><br/>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="coursename">';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span><br/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17144e6457bffc9fa0437cc7e3d39509(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{key}}, {{component}}, {{alttext}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61e67d431a51217cfb9d099db34d2445(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}} {{key}}, {{component}}, {{alttext}} {{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section17144e6457bffc9fa0437cc7e3d39509($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d4a5f32bdbbd9e56aec3e97b83b6531(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '      
<div id="{{id}}_{{timestart}}" class="item event-item calendar_event_{{normalisedeventtype}} {{eventpast}}">
    <div
        class="event clearfix"
        data-eventtype-{{calendareventtype}}="1"
        
        data-region="event-item"
    >
       <div class="card-text content calendarwrapper" >
            {{#coursename}}<span class="coursename">{{coursename}}</span><br/>{{/coursename}}
            <span>{{#icon}}{{#pix}} {{key}}, {{component}}, {{alttext}} {{/pix}}{{/icon}}</span><a
                data-type="event"
                data-action="view-event"
                data-event-id="{{id}}"
                href="{{viewurl}}"
                class="timetable-event"
            >{{{name}}}</a><br/>
            {{{formattedtime}}}
    
    </div>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_';
                $value = $this->resolveValue($context->find('timestart'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="item event-item calendar_event_';
                $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('eventpast'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    <div
';
                $buffer .= $indent . '        class="event clearfix"
';
                $buffer .= $indent . '        data-eventtype-';
                $value = $this->resolveValue($context->find('calendareventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="1"
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        data-region="event-item"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '       <div class="card-text content calendarwrapper" >
';
                $buffer .= $indent . '            ';
                $value = $context->find('coursename');
                $buffer .= $this->section8a29fb6d779749966ffedab6189fedbd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <span>';
                $value = $context->find('icon');
                $buffer .= $this->section61e67d431a51217cfb9d099db34d2445($context, $indent, $value);
                $buffer .= '</span><a
';
                $buffer .= $indent . '                data-type="event"
';
                $buffer .= $indent . '                data-action="view-event"
';
                $buffer .= $indent . '                data-event-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                class="timetable-event"
';
                $buffer .= $indent . '            >';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a><br/>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('formattedtime'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ada18cce7e46ad84d774c8a4b7a284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noupcomingevents, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noupcomingevents, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
