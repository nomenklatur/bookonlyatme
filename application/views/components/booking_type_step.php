<?php
/**
 * Local variables.
 *
 * @var array $available_services
 */
?>

<div id="wizard-frame-1" class="wizard-frame" style="visibility: hidden;">
    <div class="flex flex-col justify-center items-center mt-4">
        <p class="text-lg font-semibold mb-4">Pilih Layanan dan Mitra Kami</p>
        <div class="w-full px-4">
            <div class="mb-3 flex flex-col gap-2 w-full">
                <label for="select-service">
                    <strong>Layanan</strong>
                </label>

                <select id="select-service" class="border-2 p-2 border-gray-300 rounded-md w-full">
                    <option value="">
                        <?= lang('please_select') ?>
                    </option>
                    <?php
                    // Group services by category, only if there is at least one service with a parent category.
                    $has_category = false;
                    foreach ($available_services as $service) {
                        if (!empty($service['service_category_id'])) {
                            $has_category = true;
                            break;
                        }
                    }

                    if ($has_category) {
                        $grouped_services = [];

                        foreach ($available_services as $service) {
                            if (!empty($service['service_category_id'])) {
                                if (!isset($grouped_services[$service['service_category_name']])) {
                                    $grouped_services[$service['service_category_name']] = [];
                                }

                                $grouped_services[$service['service_category_name']][] = $service;
                            }
                        }

                        // We need the uncategorized services at the end of the list, so we will use another
                        // iteration only for the uncategorized services.
                        $grouped_services['uncategorized'] = [];
                        foreach ($available_services as $service) {
                            if ($service['service_category_id'] == null) {
                                $grouped_services['uncategorized'][] = $service;
                            }
                        }

                        foreach ($grouped_services as $key => $group) {
                            $group_label =
                                $key !== 'uncategorized' ? $group[0]['service_category_name'] : 'Uncategorized';

                            if (count($group) > 0) {
                                echo '<optgroup label="' . e($group_label) . '">';
                                foreach ($group as $service) {
                                    echo '<option value="' .
                                        $service['id'] .
                                        '">' .
                                        e($service['name']) .
                                        '</option>';
                                }
                                echo '</optgroup>';
                            }
                        }
                    } else {
                        foreach ($available_services as $service) {
                            echo '<option value="' . $service['id'] . '">' . e($service['name']) . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            
            <?php slot('after_select_service'); ?>

            <div class="mb-3 flex flex-col gap-2 w-full">
                <label for="select-provider">
                    <strong>Mitra</strong>
                </label>

                <select id="select-provider" class="border-2 p-2 border-gray-300 rounded-md w-full">
                    <option value="">
                        <?= lang('please_select') ?>
                    </option>
                </select>
            </div>

            <?php slot('after_select_provider'); ?>

            <div id="service-description" class="text-sm text-gray-400">
                <!-- JS -->
            </div>

            <?php slot('after_service_description'); ?>
            
        </div>
    </div>

    <div class="p-4 flex justify-end">
        <button type="button" id="button-next-1" class="border-2 border-black px-2 py-1 rounded-lg button-next" data-step_index="1">
            Selanjutnya <i class="fas fa-chevron-right ms-2"></i>
        </button>
    </div>
</div>
