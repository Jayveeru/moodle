<?php

class __Mustache_d7fd6584e3d1b286737e8cf44f0f2e8f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex justify-content-end mb-3" id="yui_';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '    <div class="events card-text content calendarwrapper"  data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_timetable/event')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('pagination');
        $buffer .= $this->sectionD23d40618d33d8b7ef7f622a366e53e1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionC4a58eb0ac454f7ad01998d2bf843ac9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#" data-url="{{{prevurl}}}" data-mode="{{ulayout}}" class="timeblock{{instanceid}}" >
            <span aria-hidden="true">«</span>
           {{prevtext}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="#" data-url="';
                $value = $this->resolveValue($context->find('prevurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-mode="';
                $value = $this->resolveValue($context->find('ulayout'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="timeblock';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" >
';
                $buffer .= $indent . '            <span aria-hidden="true">«</span>
';
                $buffer .= $indent . '           ';
                $value = $this->resolveValue($context->find('prevtext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f0458a228b3e3d4d5105f79963e3c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
       <a href="#"  data-url="{{{nexturl}}}"  data-mode="{{ulayout}}" class="timeblock{{instanceid}}">
            
           {{nexttext}} <span aria-hidden="true">»</span>
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '       <a href="#"  data-url="';
                $value = $this->resolveValue($context->find('nexturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"  data-mode="';
                $value = $this->resolveValue($context->find('ulayout'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="timeblock';
                $value = $this->resolveValue($context->find('instanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '           ';
                $value = $this->resolveValue($context->find('nexttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' <span aria-hidden="true">»</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD23d40618d33d8b7ef7f622a366e53e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div>

    {{#prev}}
        <a href="#" data-url="{{{prevurl}}}" data-mode="{{ulayout}}" class="timeblock{{instanceid}}" >
            <span aria-hidden="true">«</span>
           {{prevtext}}
        </a>
    {{/prev}}
    
    {{{sep}}}
    {{#next}}
       <a href="#"  data-url="{{{nexturl}}}"  data-mode="{{ulayout}}" class="timeblock{{instanceid}}">
            
           {{nexttext}} <span aria-hidden="true">»</span>
        </a>
    {{/next}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div>
';
                $buffer .= $indent . '
';
                $value = $context->find('prev');
                $buffer .= $this->sectionC4a58eb0ac454f7ad01998d2bf843ac9($context, $indent, $value);
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('sep'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('next');
                $buffer .= $this->section2f0458a228b3e3d4d5105f79963e3c25($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
