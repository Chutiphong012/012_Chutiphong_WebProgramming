<style>
    .page-link {
        background-color: #f9f1e7;
        color: black;
        border-color: #b88e2f;
        font-size: calc(70% + 1.5vmin);
        text-align: center;
        width: 3rem;
        margin: 0 0.5rem;
        border-radius: 5px;
        font-weight: bold;
    }

    .page-link:hover {
        color: white;
        background-color: rgba(154, 112, 27, 1);
    }

    .active>.page-link {
        background-color: #b88e2f;
        border-color: #b88e2f;
    }
</style>

<div class="container my-5">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!-- ปุ่มกดไปหน้าแรก -->
                    <li class="page-item">
                        <a class="page-link" href="?page=1" tabindex="-1" aria-disabled="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-chevron-bar-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0M4.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5" />
                            </svg>
                        </a>
                    </li>
                    <!-- ปุ่มกดย้อนกลับ -->
                    <li class="page-item <?= $page > 1 ? '' : 'disabled' ?> "> <!-- page : หน้าปัจจุบันที่แสดง -->
                        <a class="page-link " href="?page=<?= $page - 1 ?> " aria-label="Previous">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                </svg>
                            </span>
                        </a>
                    </li>

                    <!-- ปุ่มตัวเลขกดเลขหน้า -->
                    <?php for ($i = 1; $i <= $page_total; $i++): ?> <!-- ลูป for แสดงปุ่มเลขหน้าทั้งหมด -->
                        <?php if ($page <= 2): ?> <!-- เงื่อนไข เมื่อถึงแค่หน้าที่ 2 -->
                            <?php if ($i <= 5): ?> <!-- เงื่อนไข ให้แสดงปุ่มกดเลขหน้ามากสุดแค่ 5 หน้า-->
                                <li class="page-item <?= $page == $i ? 'active' : '' ?>"><a class="page-link"
                                        href="?page=<?= $i ?>">
                                        <?= $i ?>
                                    </a></li>
                            <?php endif; ?>
                        <?php elseif ($page > 2): ?> <!-- เงื่อนไข เมื่อเกินไปหน้าที่ 2 ขึ้นไป-->
                            <?php if ($i <= $page + 2 && $i >= $page - 2): ?>
                                <!-- เงื่อนไข ให้แสดงปุ่มกดเลขหน้าอยู่กึ่งกลาง กรณีมีหลายๆหน้า-->
                                <li class="page-item <?= $page == $i ? 'active' : '' ?>"><a class="page-link"
                                        href="?page=<?= $i ?>">
                                        <?= $i ?>
                                    </a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor; ?> <!-- จบลูป -->


                    <!-- ปุ่มกดหน้าถัดไป -->
                    <li class="page-item <?= $page < $page_total ? '' : 'disabled' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <!-- ปุ่มกดหน้าสุดท้าย -->
                    <li class="page-item"><a class="page-link" href="?page=<?= $page_total ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-chevron-bar-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0M11.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>