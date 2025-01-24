<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">

	<title>AdminHub</title>
</head>
<body>

	<section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-wink-smile'></i>
			<span class="text">Welcome!</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="#">
                    <i class='bx bx-task' ></i>
					<span class="text">Tugas</span>
				</a>
			</li>
			<li>
				<a href="#">
                    <i class='bx bxs-note'></i>
					<span class="text">Analisis</span>
				</a>
			</li>
			<li>
				<a href="#">
                <i class='bx bxs-message-rounded-dots'></i>
					<span class="text">Pesan</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">My Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="Login.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">99</span>
			</a>
			<a href="#" class="profile">
				<i class='bx bxs-user' ></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Tugas selesai</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Pengunjung</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Daftar Tugas</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Mapel</th>
								<th>Deadline</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
								<td>
									<p>PKK(Bu Reny)</p>
								</td>
								<td>07-01-2025</td>
								<td><span class="status completed">Completed</span></td>
								<td>
									<a href="#" class="edit">
									<i class='bx bxs-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>
									<p>Matematika(Bu Mulati)</p>
								</td>
								<td>03-11-2025</td>
								<td><span class="status pending">Pending</span></td>
								<td>
									<a href="#" class="edit">
									<i class='bx bxs-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>
									<p>Bhs Inggris(Bu Eridha)</p>
								</td>
								<td>11-03-2025</td>
								<td><span class="status process">Process</span></td>
								<td>
									<a href="#" class="edit">
									<i class='bx bxs-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>
									<p>Bhs Indo(Pak Heru)</p>
								</td>
								<td>17-02-2025</td>
								<td><span class="status pending">Pending</span></td>
								<td>
									<a href="#" class="edit">
									<i class='bx bxs-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>
									<p>Basis Data(Bu Dinda)</p>
								</td>
								<td>23-08-2025</td>
								<td><span class="status completed">Completed</span></td>
								<td>
									<a href="#" class="edit">
									<i class='bx bxs-edit-alt' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Catatan</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>PKK</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Basis Data</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>PPB</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>PBTG</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Sejarah</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="dashboard.js"></script>
</body>
</html>