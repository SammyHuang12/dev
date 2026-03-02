    const projectData = [
      { name: "🚀 專案 A", start: "2025-06-01", end: "2025-06-05", progress: 90 },
      { name: "🛠️ 專案 B", start: "2025-06-03", end: "2025-06-08", progress: 100 },
      { name: "📦 專案 C", start: "2025-06-05", end: "2025-06-10", progress: 85 },
      { name: "📊 專案 D", start: "2025-06-10", end: "2025-06-15", progress: 70 },
      { name: "🚀 專案 E", start: "2025-06-15", end: "2025-06-20", progress: 90 },
      { name: "🛠️ 專案 F", start: "2025-06-20", end: "2025-07-08", progress: 60 },
      { name: "📦 專案 G", start: "2025-07-08", end: "2025-07-10", progress: 10 },
      { name: "📊 專案 H", start: "2025-07-10", end: "2025-07-15", progress: 5 }
    ];

    const tasks = projectData.map((project, index) => ({
      id: `task-${index + 1}`,
      name: project.name,
      start: project.start,
      end: project.end,
      progress: project.progress,
      dependencies: ""
    }));

    const gantt = new Gantt("#gantt", tasks, {
      view_mode: "Day", // 可以改成 "Week"、"Month"
      language: "zh",   // 若要中文介面
      on_click: task => {
        alert(`你點擊了：${task.name}`);
      },
      on_date_change: (task, start, end) => {
        console.log(`日期變更：${task.name}`, start, end);
      },
      on_progress_change: (task, progress) => {
        console.log(`進度變更：${task.name}`, progress);
      }
    });