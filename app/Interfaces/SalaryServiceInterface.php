<?php

namespace App\Interfaces;

/**
 * Salary Service Interface
 */
interface SalaryServiceInterface
{
    /**
     * Get salary
     * @param  int $id
     * @return array
     */
    // public function getSalary($id);
    public function getGroupById($date, $id);
    public function getStudent($id, $date, $teacher_id);
    public function getTeacherList($date);
}
//
