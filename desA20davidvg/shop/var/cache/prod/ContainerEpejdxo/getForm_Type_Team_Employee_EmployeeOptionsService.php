<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.team.employee.employee_options' shared service.

return $this->services['form.type.team.employee.employee_options'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Employee\EmployeeOptionsType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.core.team.employee.configuration.options_checker']) ? $this->services['prestashop.core.team.employee.configuration.options_checker'] : $this->load('getPrestashop_Core_Team_Employee_Configuration_OptionsCheckerService.php')) && false ?: '_'}->canBeChanged());
